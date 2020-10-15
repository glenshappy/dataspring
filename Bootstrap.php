<?php
function autoloader($dir)
{
    spl_autoload_register(function ($class) use ($dir) {
        if (class_exists($class)) {
            return true;
        }
	

        $pathPsr4 = $dir."/".strtr($class, '\\', DIRECTORY_SEPARATOR) . ".php";
	
        if (file_exists($pathPsr4)){
            include_once $pathPsr4;
        }

        return true;

    });
}

define('BOOT_ROOT', __DIR__);
autoloader(BOOT_ROOT);