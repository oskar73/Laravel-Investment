<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48fe645821ab7bb28ce828443a23cdaa
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\LandingPages\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\LandingPages\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit48fe645821ab7bb28ce828443a23cdaa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48fe645821ab7bb28ce828443a23cdaa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit48fe645821ab7bb28ce828443a23cdaa::$classMap;

        }, null, ClassLoader::class);
    }
}
