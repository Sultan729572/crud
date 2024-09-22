<html>
<head>
	<title>Add Produk</title>
</head>

<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>NamaProduk</td>
				<td><input type="text" name="NamaProduk"></td>
			</tr>
			<tr> 
				<td>Harga</td>
				<td><input type="text" name="Harga"></td>
			</tr>
			<tr> 
				<td>Stok</td>
				<td><input type="text" name="Stok"></td>
			</tr>
			<tr> 
				<td>KategoriID</td>
				<td><input type="text" name="KategoriID"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php
	if(isset($_POST['Submit'])) {
		$NamaProduk = $_POST['NamaProduk'];
		$Harga = $_POST['Harga'];
		$Stok = $_POST['Stok'];
		$KategoriID = $_POST['KategoriID'];

		// Include database connection file
		include_once("config.php");

		// Insert product data into table
		$result = mysqli_query($mysqli, "INSERT INTO produk(NamaProduk, Harga, Stok, KategoriID) VALUES('$NamaProduk','$Harga','$Stok','$KategoriID')");

		echo "Produk added successfully. <a href='index.php'>View Produk</a>";
	}
	?>
</body>
</html>
