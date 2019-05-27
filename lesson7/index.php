<?php 

require_once './Mongodb/Animal.php';
require_once './Mysql/Animal.php';

use Mysql\Animal;
$meo = new Animal();
var_dump($meo);


 ?>