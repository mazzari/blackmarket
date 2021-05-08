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
            <th>nama category</th>  
        </tr>
        <?php
            require_once("connection.php");
            $nomor = 1;
            $nama_category = mysqli_query($connection, "select nama_category from category");

            foreach($nama_category as $row){
                echo " 
                <tr>
                    <td>$nomor</td>
                    <td>".$row['nama_category']."</td>
                </tr>
                ";
                $nomor++;
            }

        ?>
        
    </table>
    <a href="tambah_category.php">tambah data</a>
</body>
</html> 