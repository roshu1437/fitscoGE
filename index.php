<?php 
    include_once('common.php');
    // Common Variables
    $m_title = 'This is Home page';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('header.php'); ?>
</head>
<body>
    <?php require_once('navbar.php'); ?>
    <!-- Home page cards -->
    <div class="container my-4">
        <div class="row mx-0">
            <div class="col-lg-3 col-md-4 col-sm-6  col-xs-12">
                <div class="card">
                    <img src="p-images/demo1.jpg" class="card-img-top" alt="tech image">
                    <div class="card-body">
                        <h5 class="card-title">New laptop</h5>
                        <p class="d-flex justify-content-between">
                            <span>Price:<del>$400</del>-<strong>$200</strong></span>
                            <span>Cat:<strong><a href="<?php echo $main_url; ?>category.php">Tech</a></strong></span>
                        </p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="d-flex justify-content-between align-items-center">
                            <a href="detail.php" class="btn btn-primary">Buy Now</a>
                            <strong class="text-success">In Stock</strong>
                            <!-- <strong class="text-danger">Out of Stock</strong> -->
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6  col-xs-12">
                <div class="card">
                    <img src="p-images/demo2.jpg" class="card-img-top" alt="tech image">
                    <div class="card-body">
                        <h5 class="card-title">New laptop</h5>
                        <p class="d-flex justify-content-between">
                            <span>Price:<del>$400</del>-<strong>$200</strong></span>
                            <span>Cat:<strong><a href="<?php echo $main_url; ?>category.php">Tech</a></strong></span>
                        </p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="d-flex justify-content-between align-items-center">
                            <a href="<?php echo $main_url; ?>detail.php" class="btn btn-primary">Buy Now</a>
                            <strong class="text-success">In Stock</strong>
                            <!-- <strong class="text-danger">Out of Stock</strong> -->
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6  col-xs-12">
                <div class="card">
                    <img src="p-images/demo3.jpg" class="card-img-top" alt="tech image">
                    <div class="card-body">
                        <h5 class="card-title">New laptop</h5>
                        <p class="d-flex justify-content-between">
                            <span>Price:<del>$400</del>-<strong>$200</strong></span>
                            <span>Cat:<strong><a href="<?php echo $main_url; ?>category.php">Tech</a></strong></span>
                        </p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="d-flex justify-content-between align-items-center">
                            <a href="<?php echo $main_url; ?>detail.php" class="btn btn-primary">Buy Now</a>
                            <strong class="text-success">In Stock</strong>
                            <!-- <strong class="text-danger">Out of Stock</strong> -->
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6  col-xs-12">
                <div class="card">
                    <img src="p-images/demo1.jpg" class="card-img-top" alt="tech image">
                    <div class="card-body">
                        <h5 class="card-title">New laptop</h5>
                        <p class="d-flex justify-content-between">
                            <span>Price:<del>$400</del>-<strong>$200</strong></span>
                            <span>Cat:<strong><a href="<?php echo $main_url; ?>category.php">Tech</a></strong></span>
                        </p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="d-flex justify-content-between align-items-center">
                            <a href="<?php echo $main_url; ?>detail.php" class="btn btn-primary">Buy Now</a>
                            <strong class="text-success">In Stock</strong>
                            <!-- <strong class="text-danger">Out of Stock</strong> -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Home page cards End -->
    <?php require_once('footer.php'); ?>
</body>
</html>