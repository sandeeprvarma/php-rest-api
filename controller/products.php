<?php

/**
 * Products
 * Performs CRUD operation on products 
 * @author sandeep varma
 */
class Products
{
	
	private $product;
	public function __construct()
	{
		$this->product = new ProductModel;
	}

	/**
	* getAll
	* Returns an array of products with their details
	* @return array
	*/
	public function getAllProducts()
	{
		$products = $this->product->getAll();
		if($products) {
			Response::json(200,$products);
		}else {
			Response::errorLog(403,"Unable to get the product details.");
		}
	}
}