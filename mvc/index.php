<?php 
require_once './models/Product.php';
require_once './models/Category.php';

$products = Product::all();

var_dump($products);

 ?>