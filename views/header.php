<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Vero Blog</title>
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="css/blog.css">
  <link rel="stylesheet" href="css/blogs.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/service.css">
  <link rel="stylesheet" href="css/update.css">
  <link rel="stylesheet" href="css/create.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">



</head>
<?php 
session_start();
?>
<body>
  <header>
    <nav>
      <h2>Vero</h2>
    
        <ul class="links-container">
        <li><a href=".?action=home">Home</a></li>
        <li><a href=".?action=about">About</a></li>
       
        <li><a href=".?action=contact">Contact</a></li>
        <li><a href=".?action=blogs">Blogs</a></li>
      
     
        <?php if (isset($_SESSION['user_id'])) { ?>
         
          <li><a href=".?action=create">Create</a></li>
        <li><a href=".?action=logout">Logout</a></li>
        <?php } else { ?>
        <li><a href=".?action=login">Login</a></li>
        <?php } ?>

        </ul>
     <?php if (isset($_SESSION['user_id'])) { ?>
      <p>Welcome, <?php echo $_SESSION['user_name']; ?></p>
      <?php } ?>
    
    </nav>
  </header>
