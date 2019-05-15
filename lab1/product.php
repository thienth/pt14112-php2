<?php
class Product{
    var $id;
    var $name;
    var $image;
    var $cate_id;
    var $price;
    var $short_desc;
    var $detail;
    var $star;
    var $created_at;
    var $updated_at;
    var $views;
    // định nghĩa ra hành động cho class Product
    function show(){
        echo "  <div>
                    <h2>" . $this->name . "</h2>
                    <p><b>Giá: " . $this->price . "</b></p>
                </div>";
        
    }
}

$tv = new Product();
$tv->name = "Tivi SameSung S69";
$tv->price = 2300;
// thực thi hành động của cá thể $tv

$nm = new Product();
$nm->name = "Máy xay nc mía D100";
$nm->price = 200;
$tv->show();
$nm->show();
?>
