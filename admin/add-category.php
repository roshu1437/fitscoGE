
<?php 
    include_once('../common.php');
    // Common Variables
    $m_title = 'Category Add Page';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../header.php'); ?>
    <!-- <link rel="stylesheet" href="<?php echo $main_url; ?>css/main.css"> -->
</head>
<body>
    <?php require_once('navbar.php'); ?>
    <!-- Home page cards -->
    <div class="container-fluid">
        <div class="row mx-0">
            <div class="col-3">
                <?php require_once('sidebar.php'); ?>
            </div>
            <div class="col-8" >
                <h1>Add Category</h1>
                <form class="row g-3" action="<?php echo $main_url; ?>actions/category-add.php" method="post" enctype="multipart/form-data">
                    <div class="col-md-3">
                        <label for="c_title" class="form-label">Category Title</label>
                        <input type="text" class="form-control" id="c_title" name="c_title">
                    </div>
                    <div class="col-md-3">
                        <label for="c_url" class="form-label">Category URL</label>
                        <input type="text" class="form-control" id="c_url" name="c_url">
                    </div>
                    <div class="col-md-3">
                        <label for="c_description" class="form-label">Category Description</label>
                        <input type="text" class="form-control" id="c_description" name="c_description">
                    </div>
                    <div class="col-md-2 mt-5">
                        <button type="submit" class="btn btn-primary" name="add_category">Add Category</button>
                    </div>
                </form>
                <hr>
                <?php if($all_categories > 0): ?>
                    <h2>All Categories</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>C Title</th>
                                <th>C Url</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $number = 0; 
                            while($category_data = mysqli_fetch_assoc($all_categories_query)): 
                                $number++;
                            ?>
                                <tr>
                                    <td><?=$number?></td>
                                    <td><?=$category_data['c_title']?></td>
                                    <td><?=$category_data['c_url']?></td>
                                    <td>
                                        <button class="courser-pointer badge bg-info border-0" data-bs-toggle="collapse" data-bs-target="#testingDiv<?=$number?>" aria-controls="testingDiv<?=$number?>" aria-expanded="false">Update</button>
                                        <?php if($category_data['c_status'] == 1): ?>
                                            <a href="<?php echo $main_url; ?>actions/category-add.php?dell=<?=$category_data['id']?>" class="badge btn-danger text-decoration-none">Delete</a>
                                        <?php else: ?>
                                                <a href="<?php echo $main_url; ?>actions/category-add.php?recover=<?=$category_data['id']?>" class="badge btn-warning text-decoration-none">Recover</a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr class="collapse navbar-collapse" id="testingDiv<?=$number?>">
                                    <td colspan="4">
                                        <form class="row g-3" action="<?php echo $main_url; ?>actions/category-add.php" method="post">
                                            <div class="col-md-3">
                                                <label for="c_title" class="form-label">Category Title</label>
                                                <input type="text" class="form-control" id="c_title" name="c_title" value="<?=$category_data['c_title']?>">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="c_url" class="form-label">Category URL</label>
                                                <input type="text" class="form-control" id="c_url" name="c_url" value="<?=$category_data['c_url']?>">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="c_description" class="form-label">Category Description</label>
                                                <input type="text" class="form-control" id="c_description" name="c_description" value="<?=$category_data['c_description']?>">
                                            </div>
                                            <input type="hidden" name="c_id" value="<?=$category_data['id']?>"> 
                                            <div class="col-md-2 mt-5">
                                                <button type="submit" class="btn btn-primary" name="update_category">Update Category</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <h1 class="text-center text-info">No category found please add first</h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Home page cards End -->
    <?php require_once('../footer.php'); ?>
</body>
</html>