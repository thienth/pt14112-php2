<?php 
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";

require_once './bootstrap.php';
// https://laravel.com/docs/5.8/eloquent
// https://laravel.com/docs/5.8/eloquent-relationships

use Controllers\HomeController;
use Controllers\ProductController;
switch ($url) {
	case '/':
		$ctr = new HomeController();
		$ctr->index();
		break;
	case 'about':
		$ctr = new HomeController();
		$ctr->about();
		break;
	case 'lien-he':
		$ctr = new HomeController();
		$ctr->contact();
		break;
	case 'login':

		$ctr = new HomeController();
		if($_SERVER['REQUEST_METHOD'] == "GET"){
			$ctr->login();	
		}else{
			$ctr->postLogin();
		}
		
		break;
	case 'admin':
		$ctr = new AdminController();
		$ctr->index();
		break;
	case 'admin/products':
		$ctr = new ProductController();
		$ctr->listProduct();
		break;
	case 'admin/products/add':
		$ctr = new ProductController();
		if($_SERVER['REQUEST_METHOD'] == "GET"){
			$ctr->addProduct();	
		}else{
			$ctr->saveAddProduct();
		}
		
		break;
	
	default:
		echo "404 - duong dan khong ton tai";
		break;
}

 ?>