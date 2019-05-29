<?php 
namespace Controllers;
use Models\Product;
use Models\Category;
class ProductController{

	function listProduct(){
		Product::destroy(49);
		$products = Product::all();
							
		// var_dump($products);
		include_once './views/product/list.php';
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

		$model = new Product();

		// $model = Product::find(52);
		$model->name = $name;
		$model->price = $price;
		$model->image = $image;
		$model->cate_id = $cate_id;

		$model->save();

		header('location: ./');
		die;

	}
}

 ?>