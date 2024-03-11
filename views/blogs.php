<?php 
session_start();
?>
<section class="blogs-section">
    <div class="blogs-title">
        <h1>Blogs</h1>
        <p>Read the latest blogs from my community</p>
    </div>
    <div class="blogs-container">
        <?php foreach ($blogs as $blog):?>
        <div class="blog">
            <h2><?=$blog['title'];?></h2>
           <p>
           <?php 
            if(strlen($blog['content']) > 50) {
                echo substr($blog['content'], 0, 50) . '...';
            } else {
                echo $blog['content'];
            }
            ?>
           </p>
          
           <?php 
            if(strlen($blog['content']) > 30){
                echo '<p><a href="index.php?action=blog&blog_id=' . $blog['id'] . '">Read More</a></p>';
            }
             ?>
            <p class="blog-date">On: <?=$blog['created_at'];?></p>
            <div class="action-container">

           
             <?php if (isset($_SESSION['user_id'])) { ?>
                <div class="blog-update">
                    <a href=".?action=update&blog_id=<?php echo $blog['id']; ?>">Update</a>
                    
                </div>
                <div class="blog-delete">
                    <a href=".?action=delete&blog_id=<?php echo $blog['id']; ?>">Delete</a>
                </div>
            <?php } ?>

            </div>
        </div>
        <?php endforeach;?>
       
    </div>
</section>