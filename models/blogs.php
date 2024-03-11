<?php
require_once "database.php";


function create_blog($title,$content)
{
    global $pdo;
    $query = "INSERT INTO tbl_blogs (title, content) VALUES (:title, :content)";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':content', $content); 
    $statement->execute();
    $statement->closeCursor();
}


function get_blogs()
{
    global $pdo;
    $query = "SELECT * FROM tbl_blogs";
    $statement = $pdo->prepare($query);
    $statement->execute();
    $blogs = $statement->fetchAll();
    $statement->closeCursor();
    return $blogs;
}



function get_one_blog($id)
{
    global $pdo;
    $query = "SELECT * FROM tbl_blogs WHERE id = :id";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $blog = $statement->fetch();
    $statement->closeCursor();
    return $blog;
}


function update_blog($id,$title, $content)
{
    global $pdo;
    $query = "UPDATE tbl_blogs SET title = :title, content = :content WHERE id = :id";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':content', $content);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();
}


function delete_blog($id)
{
    global $pdo;
    $query = "DELETE FROM tbl_blogs WHERE id = :id";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();
}   