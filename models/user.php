<?php

require_once "database.php";



function create_user($name, $password, $email, ) {
    global $pdo;
    $query = "INSERT INTO users (name, password, email) VALUES (name, :password, :email)";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':username', $name);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':email', $email);
   
    $statement->execute();
    $statement->closeCursor();
}



function login_user($email, $password) {
    global $pdo;
    $query = "SELECT * FROM tbl_users WHERE email = :email AND password = :password";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    return $user;
}


function get_user($id) {
    global $pdo;
    $query = "SELECT * FROM tbl_users WHERE id = :id";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    return $user;
}