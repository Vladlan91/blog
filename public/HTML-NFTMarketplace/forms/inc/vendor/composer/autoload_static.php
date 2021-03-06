<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita373b23bb14026a7d129b8d3c2ae99d3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita373b23bb14026a7d129b8d3c2ae99d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita373b23bb14026a7d129b8d3c2ae99d3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita373b23bb14026a7d129b8d3c2ae99d3::$classMap;

        }, null, ClassLoader::class);
    }
}
