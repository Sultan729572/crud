<?php
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>
</head>
<body>
    <h2>Menu</h2>
    <ul>
        <li><a href="produk/index.php">Produk</a></li>
        <li><a href="users/index.php">Users</a></li>
        <li><a href="kategori/index.php">Kategori</a></li>
    </ul>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>
