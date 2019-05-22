<?php 
/**
 * 
 */
class HomeController
{
	
	function index()
	{
		echo "day la trang chu";
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
}
 ?>