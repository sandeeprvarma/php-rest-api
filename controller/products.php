<?php

/**
 * Products
 * Performs CRUD operation on products 
 * @author sandeep varma
 */
class Products extends AnotherClass
{
	
	private $product;
	public function __construct()
	{
		$this->product = new ProductsModel;
	}

	/**
	* getAll
	* Returns an array of products with their details
	* @return array
	*/
	public function getAllProducts()
	{
		$products = $this->product->getAll();
	}
}