<?php 
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";


require_once './controllers/HomeController.php';
require_once './controllers/ProductController.php';
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
		$ctr->login();
		break;
	case 'admin':
		$ctr = new AdminController();
		$ctr->index();
		break;
	case 'admin/products':
		$ctr = new ProductController();
		$ctr->listProduct();
		break;
	
	default:
		echo "404 - duong dan khong ton tai";
		break;
}

 ?>