<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb8e60d7df1f0d682b9a3ef3c29187cb
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitdb8e60d7df1f0d682b9a3ef3c29187cb::$classMap;

        }, null, ClassLoader::class);
    }
}
