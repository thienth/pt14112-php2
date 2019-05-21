<?php 

require_once './models/BaseModel.php';
require_once './models/Category.php';
class Product extends BaseModel
{
	
	public $tableName = "products";
	
	function getCateInfo(){
		return Category::where(['id', '=', $this->cate_id])->first();
	}
}

 ?>