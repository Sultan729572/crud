<?php
include_once("config.php");

if(isset($_POST['update'])) {
	$ProdukID = $_POST['ProdukID'];
	$NamaProduk = $_POST['NamaProduk'];
	$Harga = $_POST['Harga'];
	$Stok = $_POST['Stok'];
	$KategoriID = $_POST['KategoriID'];

	// Update produk data
	$result = mysqli_query($mysqli, "UPDATE produk SET NamaProduk='$NamaProduk', Harga='$Harga', Stok='$Stok', KategoriID='$KategoriID' WHERE ProdukID=$ProdukID");

	header("Location: index.php");
}

// Display selected produk data based on ProdukID
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM produk WHERE ProdukID=$id");

while($produk_data = mysqli_fetch_array($result)) {
	$NamaProduk = $produk_data['NamaProduk'];
	$Harga = $produk_data['Harga'];
	$Stok = $produk_data['Stok'];
	$KategoriID = $produk_data['KategoriID'];
}
?>

<html>
<head>
	<title>Edit Produk</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form name="update_produk" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>NamaProduk</td>
				<td><input type="text" name="NamaProduk" value="<?php echo $NamaProduk;?>"></td>
			</tr>
			<tr> 
				<td>Harga</td>
				<td><input type="text" name="Harga" value="<?php echo $Harga;?>"></td>
			</tr>
			<tr> 
				<td>Stok</td>
				<td><input type="text" name="Stok" value="<?php echo $Stok;?>"></td>
			</tr>
			<tr> 
				<td>KategoriID</td>
				<td><input type="text" name="KategoriID" value="<?php echo $KategoriID;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="ProdukID" value="<?php echo $_GET['id'];?>"></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
