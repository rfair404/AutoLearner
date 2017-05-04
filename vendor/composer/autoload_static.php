<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53f873bae3bb4900d9926290e2c9cad0
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Autolearner\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Autolearner\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static $classMap = array (
        'Autolearner\\Base' => __DIR__ . '/../..' . '/lib/base.php',
        'Autolearner\\Tests' => __DIR__ . '/../..' . '/lib/tests.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit53f873bae3bb4900d9926290e2c9cad0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit53f873bae3bb4900d9926290e2c9cad0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit53f873bae3bb4900d9926290e2c9cad0::$classMap;

        }, null, ClassLoader::class);
    }
}