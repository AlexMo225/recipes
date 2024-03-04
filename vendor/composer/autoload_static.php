<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad44f52e09feb9620f68cad8ddf50007
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitad44f52e09feb9620f68cad8ddf50007::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitad44f52e09feb9620f68cad8ddf50007::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitad44f52e09feb9620f68cad8ddf50007::$classMap;

        }, null, ClassLoader::class);
    }
}
