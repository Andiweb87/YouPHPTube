<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit87667b3ec94d1b7e59ef29b9d0f17c34
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PayPal' => 
            array (
                0 => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit87667b3ec94d1b7e59ef29b9d0f17c34::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit87667b3ec94d1b7e59ef29b9d0f17c34::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit87667b3ec94d1b7e59ef29b9d0f17c34::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}