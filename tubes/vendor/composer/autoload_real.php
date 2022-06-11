<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit7f656f431bcd67ed0d32c84e4f56ae9c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit7f656f431bcd67ed0d32c84e4f56ae9c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit7f656f431bcd67ed0d32c84e4f56ae9c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit7f656f431bcd67ed0d32c84e4f56ae9c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
