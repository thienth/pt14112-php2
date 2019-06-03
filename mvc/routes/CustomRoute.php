<?php 
namespace Routes;
/**
* 
*/
use \Phroute\Phroute\RouteCollector;
use \Phroute\Phroute\Dispatcher;
class CustomRoute
{
	
	public static function init($url){
		$router = new RouteCollector();

		// danh sach san pham
		$router->get('/', ["Controllers\HomeController", "index"]);

		// chi tiet san pham
		$router->get('/detail/{id}', ["Controllers\ProductController", "detail"]);

		// form them moi san pham
		$router->get('/product/add-new', ["Controllers\ProductController", "addForm"]);

		// Luu them moi san pham
		$router->post('/product/add-new', ["Controllers\ProductController", "saveAdd"]);

		// form sua san pham
		$router->get('/product/edit/{id}', ["Controllers\ProductController", "editForm"]);

		// luu sua san pham
		$router->post('/product/edit/{id}', ["Controllers\ProductController", "saveEdit"]);

		// xoa san pham
		$router->get('/product/remove/{id}', ["Controllers\ProductController", "remove"]);

		$dispatcher = new \Phroute\Phroute\Dispatcher($router->getData());
		$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
		    
		// Print out the value returned from the dispatched function
		echo $response;
	}
}
 ?>