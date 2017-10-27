<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit30f134d1f77d6850c0259a142c1864c4
{
    public static $files = array (
        'f084d01b0a599f67676cffef638aa95b' => __DIR__ . '/..' . '/smarty/smarty/libs/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'g' => 
        array (
            'gophp\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'gophp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/gophp/library',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit30f134d1f77d6850c0259a142c1864c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit30f134d1f77d6850c0259a142c1864c4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
