<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41cd8f6696884e9b65d825ef3e2b98e6
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lablnet\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lablnet\\' => 
        array (
            0 => __DIR__ . '/..' . '/lablnet/encryption/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit41cd8f6696884e9b65d825ef3e2b98e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41cd8f6696884e9b65d825ef3e2b98e6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
