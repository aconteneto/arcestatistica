<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit38d42833836e85a0aad46ff750e6609a
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sinergi\\BrowserDetector\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sinergi\\BrowserDetector\\' => 
        array (
            0 => __DIR__ . '/..' . '/sinergi/browser-detector/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit38d42833836e85a0aad46ff750e6609a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit38d42833836e85a0aad46ff750e6609a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
