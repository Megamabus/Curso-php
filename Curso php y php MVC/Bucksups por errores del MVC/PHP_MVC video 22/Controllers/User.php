<?php
class User extends Controllers 
{
 function __construct(){
    parent::__construct();
 }   
 public function userLogin(){
    if(isset($_POST["email"]) && isset($_POST["password"])){//Captura los datos de los name de los input
        echo 1;
    }
 }
}
?>