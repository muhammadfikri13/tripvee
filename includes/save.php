<?php
include 'connection.php';
//menyimpan data ke dalam var
$name           = $_POST['name'];
$phone          = $_POST['phone'];
$date           = $_POST['date'];
$package        = $_POST['package'];
$quantity       = $_POST['quantity'];
$duration       = $_POST['duration'];
$amount       = $_POST['amount'];

//menyimpan dengan indentasi dan rupiah
$formatted_amount = "Rp" . number_format($amount, 0, ',', '.');

//menyimpan data ke tabel
$query = "INSERT INTO pesanan SET name='$name', phone='$phone', date='$date', package='$package', quantity='$quantity', duration='$duration', amount='$formatted_amount'";

mysqli_query($connection, $query);

//redirecting to index.php
header("location: ../pages/home.php");
?>