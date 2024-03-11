<?php
require_once "../models/database.php";
require_once "../models/user.php";



if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        header("Location: ../login.php?error=All fields are required");
    }
   
    $user = login_user($email, $password);

    if ($user) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        header("Location: ../index.php");
    } else {
        header("Location: login.php?error=Invalid email or password");
    }
}