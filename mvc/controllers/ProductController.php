<?php 
namespace Controllers;
use Models\Product;
use Models\Category;
class ProductController extends BaseController
{

	function detail($id, $name){
		
		echo $id . $name;die;
	}

	public function remove($id){
		Product::destroy($id);
		header('location: ' . getUrl('/'));
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