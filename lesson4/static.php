<?php 

class Product{

	public static $tableName = 'products';
	public $id = '5';
	const TABLE_NAME = 'products';

	public static function test(){
		return static::$tableName;
	}
}
class User{
	const TABLE_NAME = "users";

	function test2(){
		return static::TABLE_NAME;
	}
}

echo Product::test()
 ?>