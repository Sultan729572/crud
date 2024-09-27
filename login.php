<?php
// Start session
session_start();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate login
    if ($username == 'admin' && $password == 'admin') {
        $_SESSION['logged_in'] = true;
        header('Location: menu.php'); // Redirect to menu page
        exit;
    } else {
        $error = "username atau password salah!";
    }

}  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
    </head>
    <body>
        <h2>login</h2>
        <?php if (isset($error)): ?>
            <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
            <form action="" method="POST">
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username" required><br><br>

                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br><br>

                <button type="submit">Login</button>
            </form>
    </body>
</html>