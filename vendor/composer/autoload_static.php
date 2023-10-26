<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf83cad7a656d7292d492afda3ffdf21
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf83cad7a656d7292d492afda3ffdf21::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf83cad7a656d7292d492afda3ffdf21::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdf83cad7a656d7292d492afda3ffdf21::$classMap;

        }, null, ClassLoader::class);
    }
}
