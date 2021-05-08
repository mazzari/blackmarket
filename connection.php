<?php
$host = "localhost";
$username = "root";
$password = "";
$databasename = "blackmarket";

$connection = mysqli_connect($host, $username, $password, $databasename);

if (!$connection) {
    die("gagal menghubungkan" .mysqli_connect_error());
} else {
    // echo("berhasil");
}
?>
