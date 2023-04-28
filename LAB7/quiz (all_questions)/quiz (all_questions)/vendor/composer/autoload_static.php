<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit543e3d18ca5c07b6fb42b80f6ee323f9
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit543e3d18ca5c07b6fb42b80f6ee323f9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit543e3d18ca5c07b6fb42b80f6ee323f9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit543e3d18ca5c07b6fb42b80f6ee323f9::$classMap;

        }, null, ClassLoader::class);
    }
}
