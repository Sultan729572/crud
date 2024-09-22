<?php
// Include database connection file
include_once("config.php");

// Fetch all produk data from database
$result = mysqli_query($mysqli, "SELECT * FROM produk ORDER BY ProdukID DESC");
?>

<html>
<head>
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New Produk</a><br/><br/>

<table width='80%' border=1>
    <tr>
        <th>ProdukID</th> <th>NamaProduk</th> <th>Harga</th> <th>Stok</th> <th>KategoriID</th> <th>Update</th>
    </tr>
    <?php  
    while($produk_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$produk_data['ProdukID']."</td>";
        echo "<td>".$produk_data['NamaProduk']."</td>";  
        echo "<td>".$produk_data['Harga']."</td>";
        echo "<td>".$produk_data['Stok']."</td>"; 
        echo "<td>".$produk_data['KategoriID']."</td>"; 
        echo "<td><a href='edit.php?id=".$produk_data['ProdukID']."'>Edit</a> | <a href='delete.php?id=".$produk_data['ProdukID']."'>Delete</a></td></tr>";        
    }
    ?>
</table>
</body>
</html>
