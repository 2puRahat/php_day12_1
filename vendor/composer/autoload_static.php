<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit397881731f2caebdfd4f92395270dc7f
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit397881731f2caebdfd4f92395270dc7f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit397881731f2caebdfd4f92395270dc7f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit397881731f2caebdfd4f92395270dc7f::$classMap;

        }, null, ClassLoader::class);
    }
}
