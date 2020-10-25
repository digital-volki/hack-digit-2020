<?php

namespace DigitalStars\DataBase;

use PDO;

class DB extends \PDO {
    use Parser;

    public function __construct($dsn, $username = null, $passwd = null, $options = null) {
        parent::__construct($dsn, $username, $passwd, $options);
    }

    public static function create($dsn, $username = null, $passwd = null, $options = null) {
        return new self($dsn, $username, $passwd, $options);
    }

    public function exec($statement, $args = []) {
        return parent::exec(count($args) == 0 ? $statement : $this->parse($statement, $args));
    }

    public function query($statement, $args = [], $mode = null, $arg3 = null, $ctorargs = null) {
        $statement = (count($args) == 0 ? $statement : $this->parse($statement, $args));
        if (!is_null($ctorargs))
            return parent::query($statement, $mode, $arg3, $ctorargs);
        else if (!is_null($arg3))
            return parent::query($statement, $mode, $arg3);
        else if (!is_null($mode))
            return parent::query($statement, $mode);
        return parent::query($statement);
    }

    public function prepare($statement, $args = [], array $driver_options = array()) {
        return parent::prepare(count($args) == 0 ? $statement : $this->parse($statement, $args), $driver_options);
    }

    public function rows($sql, $args = [], $fetchMode = PDO::FETCH_ASSOC) {
        $result = $this->query($sql, $args);
        return $result !== false ? $result->fetchAll($fetchMode) : $result;
    }

    public function row($sql, $args = [], $fetchMode = PDO::FETCH_ASSOC) {
        $result = $this->query($sql, $args);
        return $result !== false ? $result->fetch($fetchMode) : $result;
    }

    public function getById($table, $id, $fetchMode = PDO::FETCH_ASSOC) {
        if (is_array($id))
            $result = $this->query("SELECT * FROM ?f WHERE ?ws", [$table, $id]);
        else
            $result = $this->query("SELECT * FROM ?f WHERE id = ?i", [$table, $id]);
        return $result !== false ? $result->fetch($fetchMode) : $result;
    }

    public function count($sql, $args = []) {
        $result = $this->query($sql, $args);
        return $result !== false ? $result->rowCount() : $result;
    }

    public function insert($table, $data) {
        $result = $this->query("INSERT INTO ?f (?af) VALUES (?as)", [$table, array_keys($data), array_values($data)]);
        return $result !== false ? $this->lastInsertId() : $result;
    }

    public function update($table, $data, $where = []) {
        if (empty($where))
            return $this->exec("UPDATE ?f SET ?As WHERE 1", [$table, $data]);
        else
            return $this->exec("UPDATE ?f SET ?As WHERE ?ws", [$table, $data, $where]);
    }

    public function delete($table, $where, $limit = -1) {
        if ($limit == -1)
            return $this->exec("DELETE FROM ?f WHERE ?ws", [$table, $where]);
        else
            return $this->exec("DELETE FROM ?f WHERE ?ws LIMIT ?i", [$table, $where, $limit]);
    }

    public function deleteAll($table) {
        return $this->exec("DELETE FROM ?f", [$table]);
    }

    public function deleteById($table, $id) {
        return $this->exec("DELETE FROM ?f WHERE id = ?i", [$table, $id]);
    }

    public function deleteByIds($table, $column, $ids) {
        return $this->exec("DELETE FROM ?f WHERE ?f IN (?as)", [$table, $column, $ids]);
    }

    public function truncate($table) {
        return $this->exec("TRUNCATE TABLE ?f", [$table]);
    }
}