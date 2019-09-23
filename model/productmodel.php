<?php

/**
 * Products Model
 */
class ProductModel
{
	private $DB;
	private function __construct()
	{
		$this->db = DB::getDBInstance();
	}

	private function __destruct()
	{
		$this->db->closeDB();
	}

	public function getAll()
	{
			
	}
}