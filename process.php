<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm-password'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confrim_password = $_POST['confirm-password'];
    if($password === $confrim_password) 
    {
    echo "Your form have been submiting sucessfully"."<br>";
    echo "Name : ". $name ."<br>";
    echo "email : ". $email."<br>";
    echo "password : ".$password."<br>";
    echo "confirm-passwords : ".$confrim_password."<br>";
    }
    else{
    echo "Password and confirm password does not match";

    }
    }
  
?>
