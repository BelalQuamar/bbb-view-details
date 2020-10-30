<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit137242058b5cdbd373dc0cbace21f6fd
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'B' => 
        array (
            'BigBlueButton\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'BigBlueButton\\' => 
        array (
            0 => __DIR__ . '/..' . '/bigbluebutton/bigbluebutton-api-php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit137242058b5cdbd373dc0cbace21f6fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit137242058b5cdbd373dc0cbace21f6fd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
