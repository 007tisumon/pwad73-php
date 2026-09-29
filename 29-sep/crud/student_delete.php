<?php include('config.php');

$id = $_GET['id'];
$sql = "DELETE FROM pwd WHERE id = $id";
$conn->query($sql);

if ($conn->affected_rows) {
    header("Location: index.php ");
}