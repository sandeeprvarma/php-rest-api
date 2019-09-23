<?php
include_once 'config.php';

function loadClasses($classname)
{
	$classname 	= strtolower( trim($classname) );
	$file 		= 'classes'.DS.$classname.'.php';
	require_once($file);
}

spl_autoload_register('loadClasses');