<?php

if( !isset($_POST["username"]) && !isset($_POST["password"]) ){
  header("Location: http://localhost/login-tailwind");
  die();
}

$username = $_POST["username"];
$password = $_POST["password"];
var_dump($_POST);
