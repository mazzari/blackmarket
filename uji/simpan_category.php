<?php
require_once('connection.php');

if(isset($_POST['submit'])) {
    $category = $_POST['category'];
    $cek_category = mysqli_num_rows(mysqli_query($connection, "select * from category where nama_category='$category'"));
    
    if ($cek_category > 0){
        echo "
        <script>
            window.alert('data category sudah ada')
            window.location='category.php'
        </script>
        ";
    } else {
       $sql = "insert into category(nama_category) values('$category')";
       $result = $connection->query($sql); 
       
       if ($result === TRUE) {
        echo "
        <script>
            window.alert('data category berhasil di simpan')
            window.location='category.php'
        </script>
        ";
       } else {
           echo "data tidak berhasil di simpan";
       }
    }
}
?>