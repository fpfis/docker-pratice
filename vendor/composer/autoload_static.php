<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2729c6403636e0f04b1292f18ecd46f2
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Yaml\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2729c6403636e0f04b1292f18ecd46f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2729c6403636e0f04b1292f18ecd46f2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
