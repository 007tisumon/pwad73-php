<?php

$host ="127.0.0.1";
$user ="root";
$pass = "password";
$db = "pwad73";

$conn = mysqli_connect($host, $user, $pass, $db); 

if (!$conn){
    die("fail". mysqli_connect_error());
}else{
    echo "success";
}
