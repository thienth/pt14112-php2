<?php 
namespace Controllers;
use Models\Book;
use Models\Category;

class BookController extends BaseController
{
	
	public function addForm(){
		$cates = Category::all();
		return $this->render('book.add-form', ['cates' => $cates]);
	}
	public function saveAdd(){
		$name = $_POST['name'];
		$price = $_POST['price'];
		$cate_id = $_POST['cate_id'];
		$star = $_POST['star'];
		$description = $_POST['description'];
		$feature_image = $_FILES['feature_image'];
		$imgLink = null;
		if($feature_image['size'] > 0){
			$filename = 'public/' .uniqid() .'-'. $feature_image['name'];
			move_uploaded_file($feature_image['tmp_name'],  './'.$filename);
			$imgLink = getUrl($filename);
		}
		$model = new Book();
		$model->name = $name;
		$model->price = $price;
		$model->cate_id = $cate_id;
		$model->star = $star;
		$model->description = $description;
		$model->feature_image = $imgLink;
		$model->save();
		header('location: ' . getUrl('detail/' . $model->id));
	}

	public function remove($id){
		Book::destroy($id);
		header('location: ' . getUrl('/'));
	}
}
 ?>