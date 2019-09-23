<?php
include_once 'config.php';

/**
 * Autoloading files
 */
class Autoload
{
	
	public static function loadCore($classname)
	{
		$classname 	= strtolower( trim($classname) );
		$file 		= 'core'.DS.$classname.'.php';
		require_once($file);
	}
	public static function loadModel($classname)
	{
		$classname 	= strtolower( trim($classname) );
		$file 		= 'model'.DS.$classname.'.php';
		require_once($file);
	}
	public static function loadController($classname)
	{
		$classname 	= strtolower( trim($classname) );
		$file 		= 'controller'.DS.$classname.'.php';
		require_once($file);
	}
}

spl_autoload_register('Autoload::loadCore');
spl_autoload_register('Autoload::loadModel');
spl_autoload_register('Autoload::loadController');
