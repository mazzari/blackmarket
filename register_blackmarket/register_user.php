<?php
require_once('../connection.php');

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass =  $_POST['password'];
    $cek_email = mysqli_num_rows(mysqli_query($connection, "select * from tabeladmin where username='$email'"));
    
    if ($cek_email > 0){
        echo "
        <script>
            window.alert('email sudah terpakai')
            window.location='register.html'
        </script>
        ";
    } else {
       $sql = "insert into tabeladmin(username, password) values('$email', '$pass')";
       $result = $connection->query($sql); 
       
       if ($result === TRUE) {
        echo "
        <script>
            window.alert('data user berhasil di simpan')
            window.location='index.html'
        </script>
        ";
       } else {
           echo "data tidak berhasil di simpan";
       }
    }
}
?>