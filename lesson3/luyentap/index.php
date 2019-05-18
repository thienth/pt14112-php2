<?php 
require_once './models/Product.php';
require_once './models/Category.php';

$productModel = new Product();
$products = $productModel->all();

$categoryModel = new Category();
$categories = $categoryModel->all();

var_dump($products);

 ?>