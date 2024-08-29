<?php
include 'connection.php';

$id = $_GET['id'];
$query = "DELETE from pesanan WHERE id = '$id'";
mysqli_query($connection, $query);
header("location: ../pages/index.php");
?>