<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita19acdcb8296e48fcbd2f86054c58bd2
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'source\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita19acdcb8296e48fcbd2f86054c58bd2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita19acdcb8296e48fcbd2f86054c58bd2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
