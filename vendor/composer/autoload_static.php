<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf68070df2b2528e7ab0c78f3af21e427
{
    public static $files = array (
        'a1f11465c49d34f0aa7e7680260f728a' => __DIR__ . '/../..' . '/config/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lybra\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lybra\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classe',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Database' => __DIR__ . '/../..' . '/config/Database.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf68070df2b2528e7ab0c78f3af21e427::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf68070df2b2528e7ab0c78f3af21e427::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf68070df2b2528e7ab0c78f3af21e427::$classMap;

        }, null, ClassLoader::class);
    }
}
