<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>category</title>
</head>
<body>
    <table border="1"> 
        <tr>
            <th>nomor</th>
            <th>users</th>  
            <th>alamat</th>
            <th>nomor tlp</th>
            <th>email</th>
            <th>tanggal lahir</th>
        </tr>
        <?php
            require_once("connection.php");
            $nomor = 1;
            $users = mysqli_query($connection, "select * from users");

            foreach($users as $row){
                echo " 
                <tr>
                    <td>$nomor</td>
                    <td>".$row['nama_users']."</td>
                    <td>".$row['alamat']."</td>
                    <td>".$row['nomor_tlp']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['tanggal_lahir']."</td>
                </tr>
                ";
                $nomor++;
            }

        ?>
        
    </table>
    <a href="">
        <img src="./images/icon.jpg" alt="tambahkan">
    </a>
</body>
</html> 