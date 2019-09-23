<?php

/**
 * Products Model
 */
class ProductModel
{
	private $DB;
	private $table = 'product';

	public function __construct()
	{
		$this->DB = DB::getDBInstance();
	}

	/**
	* Destructor
	* close database connection as soon as the ProductModel object is destroyed
	*/
	public function __destruct()
	{
		DB::closeDB();
	}

	/*
	* getAll
	* Return all product details
	* @return object 
	*/
	public function getAll()
	{
		$query = "select product_id,name,description,price from $this->table";
		if ($stmt = $this->DB->prepare($query)) {
			$stmt->execute();
			$stmt->bind_result($id, $name, $desc, $price);
			while ($stmt->fetch()) {
				$data[$id] = array($id, $name, $desc, $price);
			}
			return $data;
		}
		return false;
	}
}