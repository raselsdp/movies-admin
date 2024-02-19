<?php

include "header.php";

 ?>
 
 
 <div class="h-screen flex-grow-1 overflow-y-lg-auto">

<main class="py-6 bg-surface-secondary">
    <div class="container-fluid">

        <div class="card shadow border-0 mb-7">
            
            <div class="card-header add_cat">
                <h5 class="mb-0">Add Post</h5>
                <form method="POST" class="d-inline-block">
                            <div class="mb-3">
                                <label for="category" class="form-label">Add Category:</label>
                                <input type="text" class="form-control" id="category" name="add_category" required>
                            </div>
                            <button class="btn btn-sm bg-surface-secondary btn-neutral" style="width: 100%; " >Add</button>
                </form>
            </div>
            </div>

        <div class="card shadow border-0 mb-7 add-container">
            <div class="card-body">
                <form action="/admin/insert_post" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">Post Title:</label>
                        <input type="text" name="title" class="form-control" id="title" name="title" required>
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Post Content:</label>
                        <textarea class="form-control" name="content" id="content" name="content" rows="4" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="img" class="form-label">Image Url:</label>
                        <input type="file" name="img" class="form-control" id="img" name="img" required>
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Category:</label>
                        <select class="form-control" id="category" name="category" required>
                            <option value="0">Uncategorized</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-sm bg-surface-secondary btn-neutral" style="width: 20%; " >Add Post</button>
                </form>
            </div>
        </div>
    </div>
</main>
</div>


<?php include "footer.php"; ?>