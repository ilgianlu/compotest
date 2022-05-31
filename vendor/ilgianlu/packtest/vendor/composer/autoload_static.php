<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e638752dcedefc003d749250e6a2671
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gianluca\\Packtest\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gianluca\\Packtest\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e638752dcedefc003d749250e6a2671::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e638752dcedefc003d749250e6a2671::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8e638752dcedefc003d749250e6a2671::$classMap;

        }, null, ClassLoader::class);
    }
}
