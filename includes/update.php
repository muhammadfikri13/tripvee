<?php
include 'connection.php';

$id = $_POST['id'];
$nama = $_POST['name'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$package = $_POST['package'];
$quantity = $_POST['quantity'];
$duration = $_POST['duration'];
$amount   = $_POST['amount'];

$formatted_amount = "Rp" . number_format($amount, 0, ',', '.');

$query = "UPDATE pesanan SET name='$nama', phone='$phone', date='$date', package='$package', quantity='$quantity', duration='$duration', amount='$formatted_amount' WHERE id = '$id'";
$result = mysqli_query($connection, $query);

// Cek apakah query berhasil
if ($result) {
    header("location: ../pages/index.php");
} else {
    echo "Error updating record: " . mysqli_error($connection);
}
?>