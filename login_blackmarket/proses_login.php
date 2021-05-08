<?php
require_once("../connection.php");

$namauser = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($connection, "select * from users where username = '$namauser' and password = '$password'");
$hasil = mysqli_num_rows($query);

if ($hasil == TRUE){
    echo "<p> selamat datang  <b>".$namauser."</b></p>";
    echo "
        <script>
            window.alert('login berhasil')
            window.location='../index.html'
        </script>
    ";
    
} else {
    echo "
        <script>
            window.alert('LOGIN GAGAL')
            window.location='login.html'
        </script>
        ";
}

?>