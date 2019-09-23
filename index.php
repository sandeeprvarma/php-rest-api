<?php
error_reporting(-1);
ini_set('display_errors', 'On');
include 'bootstrap.php';
$p = new Products;
$p->getAllProducts();