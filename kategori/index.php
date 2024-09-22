<?php
// Create database connection using config file
include_once("config.php");

// Fetch all kategori data from database
$result = mysqli_query($mysqli, "SELECT * FROM kategori ORDER BY KategoriID DESC");
?>

<html>
<head>
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New Kategori</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>KategoriID</th> <th>NamaKategori</th> <th>Update</th>
    </tr>
    <?php  
    // Fetch kategori data from database and display in table
    while($kategori_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$kategori_data['KategoriID']."</td>";
        echo "<td>".$kategori_data['NamaKategori']."</td>";  
        // Edit and delete action with the correct KategoriID
        echo "<td><a href='edit.php?id=".$kategori_data['KategoriID']."'>Edit</a> | <a href='delete.php?id=".$kategori_data['KategoriID']."'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
