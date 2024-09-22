<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for kategori update, then redirect to homepage after update
if (isset($_POST['update'])) {	
	$id = $_POST['id'];
	
	$KategoriID = $_POST['KategoriID'];
	$NamaKategori = $_POST['NamaKategori'];
		
	// Update kategori data
	$result = mysqli_query($mysqli, "UPDATE kategori SET KategoriID='$KategoriID', NamaKategori='$NamaKategori' WHERE KategoriID=$id");
	
	// Redirect to homepage to display updated kategori in list
	header("Location: index.php");
}
?>
<?php
// Display selected kategori data based on id
// Getting id from url
$id = $_GET['id'];

// Fetch kategori data based on id
$result = mysqli_query($mysqli, "SELECT * FROM kategori WHERE KategoriID=$id");

while($kategori_data = mysqli_fetch_array($result)) {
	$KategoriID = $kategori_data['KategoriID'];
	$NamaKategori = $kategori_data['NamaKategori'];
}
?>
<html>
<head>	
	<title>Edit Kategori Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_kategori" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>KategoriID</td>
				<td><input type="text" name="KategoriID" value="<?php echo $KategoriID; ?>"></td>
			</tr>
			<tr> 
				<td>NamaKategori</td>
				<td><input type="text" name="NamaKategori" value="<?php echo $NamaKategori; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
