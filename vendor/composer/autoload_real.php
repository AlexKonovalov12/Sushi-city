<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdf0a23079331d75dc2d57a5c5c4a0241
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

        spl_autoload_register(array('ComposerAutoloaderInitdf0a23079331d75dc2d57a5c5c4a0241', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdf0a23079331d75dc2d57a5c5c4a0241', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdf0a23079331d75dc2d57a5c5c4a0241::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}