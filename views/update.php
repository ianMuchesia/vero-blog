<section class="blog-create-section">


    <div class="blog-container">

       <div class="blog-update-header">
       <h2 class="blog-create-title">Update Blog Page</h2>
       <div class="delete-blog">
         <a href=".?action=delete&blog_id=<?php echo $blog['id']; ?>">Delete Blog</a>
       </div>
       </div>
        <form action="." method="post" class="blog-form">
        <input type="hidden" name="action" value="update-blog">
        <input type="hidden" name="update_id" value="<?=$blog['id'];?>">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" 
                value="<?=$blog['title'];?>"
                required>
            </div>
            <div class="form-group
                    ">
                <label for="content">Content</label>
                <textarea name="content" id="content" 
                
                class="form-control" required>
                <?=$blog['content'];?></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">update</button>
            </div>

        </form>

    </div>




</section>