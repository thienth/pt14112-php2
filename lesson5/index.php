<?php 

abstract class Animal{

	abstract function run();
}

interface XXX{
	function xx1();

	function xx2();
}

interface YYY{
	function yy1();
}

trait DongVatSinhCon{

	function sinhcon(){
		echo "da sinh con";
	}

	function choan(){
		echo "da cho an roi!";
	}
} 

class Duck extends Animal implements XXX, YYY{

	// protected $name = 1;
	public function run(){
		echo 12;
	}

	function xx1(){
		echo "duck xx1";
	}

	function xx2(){
		echo "duck xx2";
	}

	function yy1(){
		echo "duck yy1";
	}
}

class Dog extends Animal implements YYY{
	use DongVatSinhCon;
	public function run(){
		echo 32;
	}

	function yy1(){
		echo "Dog yy1";
	}
}

$rex = new Dog();
$rex->choan();





 ?>