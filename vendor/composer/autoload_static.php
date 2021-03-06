<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06135eb34e6d619f01f87450e37a7d4b
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mike99\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mike99\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit06135eb34e6d619f01f87450e37a7d4b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06135eb34e6d619f01f87450e37a7d4b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit06135eb34e6d619f01f87450e37a7d4b::$classMap;

        }, null, ClassLoader::class);
    }
}
