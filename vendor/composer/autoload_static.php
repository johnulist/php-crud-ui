<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb78c1d1cc0994b3b0cff3c4eddbd5efc
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tqdev\\PhpCrudUi\\' => 16,
            'Tqdev\\PhpCrudApi\\' => 17,
        ),
        'P' => 
        array (
            'Psr\\Http\\Server\\' => 16,
            'Psr\\Http\\Message\\' => 17,
        ),
        'N' => 
        array (
            'Nyholm\\Psr7\\' => 12,
            'Nyholm\\Psr7Server\\' => 18,
        ),
        'H' => 
        array (
            'Http\\Message\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tqdev\\PhpCrudUi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Tqdev/PhpCrudUi',
        ),
        'Tqdev\\PhpCrudApi\\' => 
        array (
            0 => __DIR__ . '/..' . '/mevdschee/php-crud-api/src/Tqdev/PhpCrudApi',
        ),
        'Psr\\Http\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-server-handler/src',
            1 => __DIR__ . '/..' . '/psr/http-server-middleware/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Nyholm\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/nyholm/psr7/src',
        ),
        'Nyholm\\Psr7Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/nyholm/psr7-server/src',
        ),
        'Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/message-factory/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb78c1d1cc0994b3b0cff3c4eddbd5efc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb78c1d1cc0994b3b0cff3c4eddbd5efc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}