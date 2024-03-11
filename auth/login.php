<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body class="login-page">
    <h1>Login</h1>
    <p>Enter your username and password to login</p>
    <?php
    // Check if 'error' is in the URL parameters
    if (isset($_GET['error'])) {
        // Display the error message
        echo '<p class="error">' . htmlspecialchars($_GET['error']) . '</p>';
    }
    ?>

    <form action="auth.php" method="post">
        <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Email">
        </div>
        <div class="form-group">
<label for="password">Password</label>
        <input type="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">

        <button type="submit" name="login">Login</button>
        </div>
    </form>

    
</body>
</html>