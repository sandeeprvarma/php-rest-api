<?php

/**
* DB
* Database connection and instanciation
* @author sandeep varma
*/
class DB
{
	private static $DB;

	/**
	* Get Database instance oject
	* @return Object
	*/
	public static function getDBInstance()
	{
		self::$DB = new mysqli(DB['SERVER'],DB['USER'],DB['PASSWORD'],DB['DATABASE'],DB['PORT']) or die("Connection failed: ".self::$DB->connect_error);
		return self::$DB;
	}

	public static function closeDB()
	{
		mysqli_close(self::$DB);
	}
}