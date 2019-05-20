<?php 
$catename = uniqid();
$arr = [
		'cate_name' => $catename,
		'slug' => rand(0, 999999)
	];
require_once './models/Category.php';

$model = new Category();
$model->insert($arr);

$cates = Category::all();

var_dump($cates);


 ?>
 