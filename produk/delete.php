<?php
include_once("config.php");

// Get id from URL to delete that produk
$id = $_GET['id'];

// Delete produk row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM produk WHERE ProdukID=$id");

// After delete redirect to Home, so that latest produk list will be displayed.
header("Location:index.php");
?>
