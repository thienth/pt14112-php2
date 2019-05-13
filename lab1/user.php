<?php
class User
{
    var $id;
    var $name;
    var $avatar;
    var $email;
    var $email_verified_at;
    var $role;
    var $password;
    var $remember_token;
    var $created_at;
    var $updated_at;


    function getList(){
        echo "id: " . $this->id . "<br>";
        echo "name: " . $this->name . "<br>";
        echo "avatar: " . $this->avatar . "<br>";
        echo "email_verified_at: " . $this->email_verified_at . "<br>";

    }
}


?>