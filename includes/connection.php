<?php
$server = "localhost";
$user = "root";
$password = "";
$database_name = "db_wisata";
$connection = mysqli_connect($server, $user, $password, $database_name); // mysqli_connect digunakan unutk menghubungkan db dengan 4 parameter
if( !$connection ){ // tanda ! digunakan untuk menguji koneksi
    die("Unable to connect to database: " . mysqli_connect_error());
} else{
    echo "successfully connected!..    ";
}
?>