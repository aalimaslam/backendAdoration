<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1d2dfb29189d9c9cb6ab4e83eb1ff1f
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite1d2dfb29189d9c9cb6ab4e83eb1ff1f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1d2dfb29189d9c9cb6ab4e83eb1ff1f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite1d2dfb29189d9c9cb6ab4e83eb1ff1f::$classMap;

        }, null, ClassLoader::class);
    }
}
