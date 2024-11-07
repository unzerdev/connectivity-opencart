<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef19b4b9283cce577e1715812a6e7267
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'UnzerSDK\\examples\\' => 18,
            'UnzerSDK\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'UnzerSDK\\examples\\' => 
        array (
            0 => __DIR__ . '/..' . '/unzerdev/php-sdk/examples',
        ),
        'UnzerSDK\\' => 
        array (
            0 => __DIR__ . '/..' . '/unzerdev/php-sdk/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef19b4b9283cce577e1715812a6e7267::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef19b4b9283cce577e1715812a6e7267::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitef19b4b9283cce577e1715812a6e7267::$classMap;

        }, null, ClassLoader::class);
    }
}
