<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit27bac9c23e65ff48e4f448b93d6e5dd5
{
    public static $files = array (
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
        '1d1d744f1bd36f7044f0f268edf1c6a2' => __DIR__ . '/../..' . '/api/core/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Stdlib\\' => 12,
            'Zend\\Db\\' => 8,
        ),
        'L' => 
        array (
            'League\\Flysystem\\' => 17,
        ),
        'D' => 
        array (
            'Directus\\Installation\\' => 22,
            'Directus\\Embed\\Provider\\' => 24,
            'Directus\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stdlib/src',
        ),
        'Zend\\Db\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-db/src',
        ),
        'League\\Flysystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem/src',
        ),
        'Directus\\Installation\\' => 
        array (
            0 => __DIR__ . '/../..' . '/installation/includes',
        ),
        'Directus\\Embed\\Provider\\' => 
        array (
            0 => __DIR__ . '/../..' . '/customs/embeds',
        ),
        'Directus\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api/core/Directus',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_Extensions_' => 
            array (
                0 => __DIR__ . '/..' . '/slim/extras/Views/Extension',
            ),
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
            'Task' => 
            array (
                0 => __DIR__ . '/..' . '/directus/migrations/lib',
            ),
        ),
        'S' => 
        array (
            'Slim\\Extras' => 
            array (
                0 => __DIR__ . '/..' . '/slim/extras',
            ),
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Ruckusing' => 
            array (
                0 => __DIR__ . '/..' . '/directus/migrations/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit27bac9c23e65ff48e4f448b93d6e5dd5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit27bac9c23e65ff48e4f448b93d6e5dd5::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit27bac9c23e65ff48e4f448b93d6e5dd5::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
