<?php
// định nghĩa ra đối tượng/kiểu dữ liệu mới
class People{

    // tạo ra các thuộc tính của đối tượng 
    var $name;
    var $age;

    function getInfo(){
        echo "Toi ten la: " . $this->name . "<br>";
        echo "Nam nay toi: " . $this->age . " tuoi";
    }
    function growUp(){
        $this->age++;
    }
}

// tạo biến với kiểu dữ liệu People
$viet = new People();
$truong = new People();

// gán giá trị cho các thuộc tính của thực thể/cá thể $viet
$viet->name = 'nguyen the viet';
$viet->age = 11;

$truong->name = 'Ngô Quang Trường';
$truong->age = 12;

$viet->getInfo();
echo "<br>";
$viet->growUp();
$viet->growUp();
$viet->growUp();
$viet->getInfo();
echo "<br>";



?>