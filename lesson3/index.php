<?php 
class Animal{
	public $maulong;
	protected $gioitinh;
	private $tengoi;

	public function dichuyen(){
		echo "toi dang di";
	}

	function setMaulong($mau){
		$this->maulong = $mau;
	}
}

class People extends Animal{

}

class Student extends People{
	// private $tengoi;

	function dichuyen(){
		echo "toi dang di bang xe bus";
	}

	function setGioiTinh($gt){
		$this->gioitinh = $gt;
	}

	function getGioiTinh(){
		echo $this->gioitinh;
	}
}

class Dog extends Animal{
	function dichuyen(){
		echo "toi dang di chuyen bang 4 chan";
	}
}

$quan = new Student();
$quan->setMaulong('tim');
$quan->setGioiTinh('nam');
$quan->tengoi = 'quan dep trai';




 ?>