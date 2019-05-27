<?php 

namespace Models;
class Product extends BaseModel
{
	
	public $tableName = "products";
	
	function getCateInfo(){
		return Category::where(['id', '=', $this->cate_id])->first();
	}
}

 ?>