<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39c6e9dbdc085482c0596ecbe96bb1de
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

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit39c6e9dbdc085482c0596ecbe96bb1de::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39c6e9dbdc085482c0596ecbe96bb1de::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit39c6e9dbdc085482c0596ecbe96bb1de::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
