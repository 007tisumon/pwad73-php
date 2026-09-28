<?php

$uri ="localhost";
$username ="root";
$password ="";
$db = "mydb";


$conn = new mysqli($uri, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully <br>";

$sql = "SELECT * FROM pwd";

$result = $conn->query($sql);

