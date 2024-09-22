<?php
$databaseHost = 'localhost';
$databaseName = 'crud_db';
$databaseUsername = 'root'; 
$databasePassword = '';  

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Check connection
if (!$mysqli) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
