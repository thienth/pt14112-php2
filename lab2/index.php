<?php 

session_start();

$cates = [
	[
		"id" => 1,
		"name" => "Sức khỏe"
	],
	[
		"id" => 2,
		"name" => "Làm đẹp"
	],
	[
		"id" => 3,
		"name" => "Thể Thao"
	],
	[
		"id" => 4,
		"name" => "Văn hóa"
	],
	[
		"id" => 5,
		"name" => "Giáo dục"
	],
];
$_SESSION['GLOBAL_CATES'] = $cates;	

require_once './bootstrap.php';
// https://laravel.com/docs/5.8/eloquent
// https://laravel.com/docs/5.8/eloquent-relationships

$url = isset($_GET['url']) == true ? $_GET['url'] : "/";

function dd($var){
	echo "<pre>";
	var_dump($var);
	die;
}
// lấy ra url gốc của project
function getUrl($path = ""){
	$currentUrlpath = $GLOBALS['url'];
	$absoluteUrl = strtok("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",'?');
	if($currentUrlpath != "/"){
		$absoluteUrl = str_replace("$currentUrlpath", "", $absoluteUrl);
	}
	return $path == "/" ? $absoluteUrl : $absoluteUrl.$path;
}

use Routes\CustomRoute;
CustomRoute::init($url);

 ?>