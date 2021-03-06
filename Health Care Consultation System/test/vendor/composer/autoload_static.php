<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0718a35f852cb09175cf43a28f51c51
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite0718a35f852cb09175cf43a28f51c51::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0718a35f852cb09175cf43a28f51c51::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
