<?php 

namespace Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Book extends Eloquent
{
	
	protected $table = 'books';

	public function category(){
		return $this->belongsTo('Models\Category', 'cate_id', 'id');
	}
	
}

 ?>