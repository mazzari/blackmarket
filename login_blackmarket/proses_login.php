<?php
require_once("../connection.php");

$namauser = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($connection, "select * from tabeladmin where username = '$namauser' and password = '$password'");
$hasil = mysqli_num_rows($query);

if ($hasil == TRUE){
    echo "<p> selamat datang  <b>".$namauser."</b></p>";
} else {
    echo "LOGIN GAGAL";
    echo '<br><a href="login.html">coba lagi</a>';
}

?>