<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd59aa351842d50b4771d9abcdec490d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Setup\\' => 6,
        ),
        'E' => 
        array (
            'Envms\\FluentPDO\\' => 16,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Setup\\' => 
        array (
            0 => __DIR__ . '/../..' . '/setup',
        ),
        'Envms\\FluentPDO\\' => 
        array (
            0 => __DIR__ . '/..' . '/envms/fluentpdo/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd59aa351842d50b4771d9abcdec490d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd59aa351842d50b4771d9abcdec490d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
