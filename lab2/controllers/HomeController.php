<?php 
namespace Controllers;
use Models\Post;

class HomeController extends BaseController
{
	
	function index()
	{
		$posts = Post::all();
							
		return $this->render('homepage', ['posts' => $posts]);
	}

	function delete($id)
	{
		Post::destroy($id);
		header('location: http://localhost/pt14112/lab2');
	}
	function editForm($id)
	{
		$model = Post::find($id);
		return $this->render('edit-form', ['model' => $model]);
	}
	function addForm()
	{
		return $this->render('add-form');
	}
	function saveEdit($id)
	{

		$model = Post::find($id);
		$model->title = $_POST['title'];
		$model->slug = $_POST['slug'];
		$model->keywords = $_POST['keywords'];
		$model->description = $_POST['description'];
		$model->content = $_POST['content'];
		$model->feature_image = "";
		$model->views = $_POST['views'];
		$model->cate_id = $_POST['cate_id'];
		// var_dump($model);die;
		$model->save();
		header('location: http://localhost/pt14112/lab2');
	}
	function saveAdd()
	{

		$model = new Post();
		$model->title = $_POST['title'];
		$model->slug = $_POST['slug'];
		$model->keywords = $_POST['keywords'];
		$model->description = $_POST['description'];
		$model->content = $_POST['content'];
		$model->feature_image = "";
		$model->views = $_POST['views'];
		$model->cate_id = $_POST['cate_id'];
		// var_dump($model);die;
		$model->save();
		header('location: http://localhost/pt14112/lab2');
	}
	function postLogin()
	{
		echo $_POST['username'] . "-" . $_POST['password'];
	}
}
 ?>