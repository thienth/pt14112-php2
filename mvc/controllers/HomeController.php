<?php 
namespace Controllers;
use Models\Product;
use Models\Category;

class HomeController extends BaseController
{
	
	function index()
	{
		$products = Product::all();
							
		return $this->render('homepage', ['products' => $products]);
	}

	function about()
	{
		echo "day la gioi thieu";
	}
	function contact()
	{
		echo "day la lien he";
	}
	function login()
	{
		include_once './views/login.php';
	}
	function postLogin()
	{
		echo $_POST['username'] . "-" . $_POST['password'];
	}
}
 ?>