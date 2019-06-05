<?php 

namespace Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Product extends Eloquent
{
	
	protected $table = 'products';

	public function category(){
		return $this->belongsTo('Models\Category', 'cate_id', 'id');
	}
	
}

 ?>