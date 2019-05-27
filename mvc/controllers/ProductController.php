<?php 
namespace Controllers;
use Models\Product;
use Models\Category;
class ProductController{

	function listProduct(){

		$products = Product::all();
		var_dump($products);
		// include_once './views/product/list.php';
	}

	public function addProduct(){
		$cates = Category::all();

		include_once './views/product/add.php';
	}

	public function saveAddProduct(){
		$name = $_POST['name'];
		$price = $_POST['price'];
		$image = $_POST['image'];
		$cate_id = $_POST['cate_id'];

		$data = compact('name', 'price', 'image', 'cate_id');
		$model = new Product();
		$model->insert($data);

		header('location: ./');
		die;

	}
}

 ?>