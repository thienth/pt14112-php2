<?php 

require_once './models/BaseModel.php';
require_once './models/Category.php';
class Product extends BaseModel
{
	
	public $tableName = "products";

	function getCateInfo(){
		var_dump(Category::findOne($this->cate_id));

	}
}

 ?>