<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82ca783ce2629b5d199601d4c13e4c16
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Valitron\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Valitron\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/valitron/src/Valitron',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit82ca783ce2629b5d199601d4c13e4c16::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit82ca783ce2629b5d199601d4c13e4c16::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
