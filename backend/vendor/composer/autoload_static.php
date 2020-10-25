<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit424a727549da82359889ff9c45eb6585
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DigitalStars\\DataBase\\' => 22,
            'DigitalStars\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DigitalStars\\DataBase\\' => 
        array (
            0 => __DIR__ . '/..' . '/digitalstars/database/src',
        ),
        'DigitalStars\\' => 
        array (
            0 => __DIR__ . '/..' . '/digitalstars/simple-api/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit424a727549da82359889ff9c45eb6585::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit424a727549da82359889ff9c45eb6585::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}