<section class="blog-create-section">


    <div class="blog-container">

        <h2 class="blog-create-title">Create a new blog</h2>
        <form action="." method="post" class="blog-form">
        <input type="hidden" name="action" value="add-blog">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group
                    ">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>

        </form>

    </div>




</section>