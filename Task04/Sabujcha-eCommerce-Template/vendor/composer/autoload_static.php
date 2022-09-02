<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82a7af21b9aec50a44b6399789880308
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit82a7af21b9aec50a44b6399789880308::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit82a7af21b9aec50a44b6399789880308::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit82a7af21b9aec50a44b6399789880308::$classMap;

        }, null, ClassLoader::class);
    }
}
