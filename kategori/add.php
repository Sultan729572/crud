<html>
<head>
	<title>Add Kategori</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>KategoriID</td>
				<td><input type="text" name="KategoriID"></td>
			</tr>
			<tr> 
				<td>NamaKategori</td>
				<td><input type="text" name="NamaKategori"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into Kategori table.
	if(isset($_POST['Submit'])) {
		$KategoriID = $_POST['KategoriID'];
		$NamaKategori = $_POST['NamaKategori'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO kategori(KategoriID,NamaKategori) VALUES('$KategoriID','$NamaKategori')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Kategori</a>";
	}
	?>
</body>
</html>