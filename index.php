<?php
require_once 'models/database.php';
require_once 'models/blogs.php';
require_once 'views/header.php';

$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
$content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
$blog_id = filter_input(INPUT_GET, 'blog_id', FILTER_SANITIZE_NUMBER_INT);
$action =  filter_input(INPUT_POST, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
$update_id = filter_input(INPUT_POST, "update_id",FILTER_SANITIZE_NUMBER_INT);

if (!$action) {
    $action =  filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
    if (!$action) {
        $action = 'home';
    }
}


switch ($action) {
    case 'home':
        include_once 'views/home.php';
        break;
    case 'create':
        include_once 'views/create.php';
        break;

    case 'about':
        include_once 'views/about.php';
        break;

    case 'contact':
        include_once 'views/contact.php';
        break;
    case "blogs":
        $blogs = get_blogs();
        include_once 'views/blogs.php';
        break;
    case "blog":
        $blog = get_one_blog($blog_id);
        include_once 'views/blog.php';
        break;
    case "login":
        header("Location: auth/login.php");
        break;
    case "logout":
      
        include_once 'auth/logout.php';
        break;
    case "add-blog":

        create_blog($title, $content);
        $blogs = get_blogs();
        include_once "views/blogs.php";
        break;

    case "update":
        $blog = get_one_blog($blog_id);
        include_once 'views/update.php';
        break;
    case "update-blog":
        if (!$update_id || !$title || !$content) {
            header("Location: .?action=home.php");
            exit;
        }
       
       update_blog($update_id,$title,$content);
        $blogs = get_blogs();
        include_once "views/blogs.php";
        break;
    case "delete":
        delete_blog($blog_id);
        $blogs = get_blogs();
        include_once "views/blogs.php";
        break;

    default:
        include_once 'views/home.php';
        break;
}

require_once 'views/footer.php';
