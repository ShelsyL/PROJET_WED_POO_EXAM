<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f8c89dcf980289e80c204d300bd6d8c
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Noyau\\Classes\\' => 14,
        ),
        'A' => 
        array (
            'App\\Modeles\\' => 12,
            'App\\Controleurs\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Noyau\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/noyau/Classes',
        ),
        'App\\Modeles\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/modeles',
        ),
        'App\\Controleurs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controleurs',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f8c89dcf980289e80c204d300bd6d8c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f8c89dcf980289e80c204d300bd6d8c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4f8c89dcf980289e80c204d300bd6d8c::$classMap;

        }, null, ClassLoader::class);
    }
}