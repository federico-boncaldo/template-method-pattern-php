<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb0c659d3c4edd2004d7908d97166111f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb0c659d3c4edd2004d7908d97166111f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb0c659d3c4edd2004d7908d97166111f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
