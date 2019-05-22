<?php 
require_once './models/Product.php';
class ProductController{

	function listProduct(){
		$products = Product::all();
		include_once './views/product/list.php';
	}
}

 ?>