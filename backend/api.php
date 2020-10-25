<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

session_start([
    'cookie_lifetime' => 300400,
    'use_only_cookies' => false
]);

require_once "vendor/autoload.php";

use DigitalStars\DataBase\DB;
use DigitalStars\SimpleAPI;

header('Access-Control-Expose-Headers: Access-Control-Allow-Origin', false);
header('Access-Control-Allow-Origin: *', false);
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept', false);
header('Access-Control-Allow-Credentials: true');

$db_name = 'hacaton3';
$login = 'hacaton3';
$pass = 'LxVyxPBr5iFCQ3MLUPww';

$db = new DB("mysql:host=localhost;dbname=$db_name", $login, $pass,
    [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$api = new SimpleAPI();
switch ($api->module) {
    case 'auth':
        $data = $api->params(['login', 'password']);
        $account = $db->query("SELECT * FROM users WHERE login = ?s AND password = ?s", [$data['login'], $data['password']])->fetch() ?? null;
        if($account) {
            $_SESSION['auth'] = true;
            $_SESSION['is_admin'] = true; //временно, для хакатона
            $_SESSION['id'] = $account['id'];
            $api->answer = $api->answer = ['token' => session_id(), 'firstname' => $account['firstname'],  'lastname' => $account['lastname'], 'is_admin' => (int)$account['is_admin']];
        } else {
            $api->error('auth false');
        }
        break;
    case 'reg':
        $data = $api->params(['login', 'password', 'firstname', 'lastname', 'email']);
        $check = $db->query("SELECT login FROM users WHERE login = ?s OR email = ?s", [$data['login'], $data['email']])->fetchColumn() ?? null;
        if(!$check) {
            $db->query("INSERT INTO users(login, password, email, firstname, lastname) VALUES (?s, ?s, ?s, ?s, ?s)",
                [$data['login'], $data['password'], $data['email'], $data['firstname'], $data['lastname']]);
            $_SESSION['auth'] = true;
            $_SESSION['is_admin'] = true; //временно, для хакатона
            $_SESSION['id'] = $db->lastInsertId();
            $api->answer = ['token' => session_id(), 'firstname' => $data['firstname'],  'lastname' => $data['lastname'], 'is_admin' => (int)$_SESSION['is_admin']];
        } else {
            $api->error("Login or email exists");
        }
        break;
    case 'add_event':
        checkAuth(true);
        $data = $api->params(['name_event', 'description_event', 'data_event', 'speaker_event', 'age_speaker', 'event_type', 'json_block']);
        $json = json_decode($data['json_block'], true);
        $db->query("INSERT INTO events SET `name` = ?s, description = ?s, `date` = ?s, speaker = ?s, speaker_age = ?i, event_type = ?s", [
            $data['name_event'],  $data['description_event'], $data['data_event'], $data['speaker_event'], $data['age_speaker'], $data['event_type'],
        ]);
        $event_id = $db->lastInsertId();
        foreach ($json as $key => $block) {
            $number = $key+1;
            $db->query("INSERT INTO events_block SET event_id = ?i, `number` = ?i, `name` = ?s, description = ?s, video = ?s", [
                $event_id, $number, $block['name_block'], $block['description_block'], $block['link']
            ]);
        }
        $api->answer['result'] = true;
        break;
    case 'get_all_events':
        checkAuth();
        $data = $api->params([]);
        $api->answer = $db->query("SELECT * FROM events")->fetchAll();
        break;
    case 'get_event_blocks':
        checkAuth();
        $data = $api->params(['event_id']);
        $api->answer = $db->query("SELECT * FROM events_block WHERE event_id = ?i", [$data['event_id']])->fetchAll();
        break;
    case 'account_info':
        checkAuth();
        $data = $api->params([]);
        $api->answer = $db->query("SELECT avatar_url, status_img_url, status_text, knowledge, reputation, ref_url FROM users WHERE id = ?i", [$_SESSION['id']])->fetchAll();
        break;
    case 'get_rating_knowledge':
        checkAuth();
        $data = $api->params([]);
        $api->answer = $db->query("SELECT knowledge, id FROM users WHERE ORDER BY knowledge DESC LIMIT 100")->fetchAll();
        break;
    case 'get_rating_reputation':
        checkAuth();
        $data = $api->params([]);
        $api->answer = $db->query("SELECT reputation, id FROM users WHERE ORDER BY reputation DESC LIMIT 100")->fetchAll();
        break;
    case 'get_notification':
        checkAuth();
        $data = $api->params([]);
        $api->answer = $db->query("SELECT id, title, description, img_url FROM notification WHERE user_id = ?i", [$_SESSION['id']])->fetchAll();
        break;
    case 'send_notification':
        checkAuth();
        $data = $api->params(['title', 'description']);
        $result = $db->query("SELECT id FROM users WHERE is_admin = 0")->fetchAll();
        foreach ($result as $key => $account) {
            $db->query("INSERT INTO notification SET title = ?s, description = ?s, user_id = ?i", [$data['title'], $data['description'], $account['id']]);
        }
        $api->answer['status'] = true;
        break;
    case 'delete_notification':
        checkAuth();
        $data = $api->params(['id']);
        $db->query("DELETE FROM notification WHERE id = ?i AND user_id = ?i", [$data['id'], $_SESSION['id']]);
        $api->answer['status'] = true;
        break;
    case 'exit':
        $data = $api->params([]);
        session_destroy();
        break;
    case 'refer':
        $data = $api->params([]);
        if(isset($_SERVER['HTTP_REFERER'])) {
            $api->answer['refer'] = $_SERVER['HTTP_REFERER'];
        } else {
            $api->answer['refer'] = null;
        }
        break;
}

function checkAuth($is_admin = false) {
    global $api, $is_auth, $db;
    $is_auth = $_SESSION['auth'] ?? false;
    $adm_check = $_SESSION['is_admin'] ?? false;
    if(!$is_auth)
        $api->error("not authorized");
    if($is_admin) {
        if(!$adm_check)
            $api->error("access denied");
    }
}