<?php
// Include database connection file
include_once("config.php");

// Get id from URL to delete that kategori
$id = $_GET['id'];

// Delete kategori row from table based on given KategoriID
$result = mysqli_query($mysqli, "DELETE FROM kategori WHERE KategoriID=$id");

// After delete, redirect to Home, so the latest kategori list will be displayed
header("Location:index.php");
?>
