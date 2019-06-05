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
		$router->get('/remove/{id}', ["Controllers\HomeController", "delete"]);
		$router->get('/add', ["Controllers\HomeController", "addForm"]);
		$router->post('/add', ["Controllers\HomeController", "saveAdd"]);
		$router->get('/edit/{id}', ["Controllers\HomeController", "editForm"]);
		$router->post('/edit/{id}', ["Controllers\HomeController", "saveEdit"]);

		

		$dispatcher = new \Phroute\Phroute\Dispatcher($router->getData());
		$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
		    
		// Print out the value returned from the dispatched function
		echo $response;
	}
}
 ?>