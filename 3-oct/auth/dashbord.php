<?php
session_start();
if (empty($_SESSION['email'])) {
    header("Location: login.php");
}
var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord </title>
</head>

<body>

    <h1>Dashbord</h1> <br>

    <a href="logout.php">Logout</a>


</body>

</html>