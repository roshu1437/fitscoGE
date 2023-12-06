<?php 
    // Common Variables
    $m_title = 'Product Detail';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('header.php'); ?>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php require_once('navbar.php'); ?>
    <!-- Details page cards -->
    <div class="container my-4">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="p-images/demo1.jpg" style="height:200px;" class="img-fluid rounded-start" alt="test page">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">New laptop</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="mb-0">
                            <span>Price:<del>$400</del>-<strong>$200</strong></span>
                        </p>
                        <p class="mb-0">
                            <span>Cat:<strong>Tech</strong></span>
                        </p>
                        <p class="mb-0 position-relative">
                        <!-- <button type="button" class="btn btn-primary">
                        Notifications 
                        </button> -->
                            <strong class="text-success">In Stock </strong>
                        </p>
                        <form action="">
                            <div class="row">
                                <div class="col-3">
                                    <label for="">Select Quantity:</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-primary text-white cp q_minus">-</span>
                                        <input type="number" class="form-control text-center remove_number_appearance" value="1">
                                        <span class="input-group-text bg-primary text-white cp q_plus">+</span>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="">Select Size:</label>
                                    <div class="input-group mb-3">
                                    <!-- <label class="input-group-text" for="inputGroupSelect01">Options</label> -->
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option value="1">M</option>
                                            <option value="2">S</option>
                                            <option value="3">L</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label for="">Select Color:</label>
                                    <div class="input-group mb-3">
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option value="1">Black</option>
                                            <option value="2">White</option>
                                            <option value="3">Gray</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <h2>Related Products</h2>
        <div class="row mx-0">
            <div class="col-lg-3 col-md-4 col-sm-6  col-xs-12">
                <div class="card">
                    <img src="p-images/demo1.jpg" class="card-img-top" alt="tech image">
                    <div class="card-body">
                        <h5 class="card-title">New laptop</h5>
                        <p class="d-flex justify-content-between">
                            <span>Price:<del>$400</del>-<strong>$200</strong></span>
                            <span>Cat:<strong>Tech</strong></span>
                        </p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary">Buy Now</a>
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
                            <span>Cat:<strong>Tech</strong></span>
                        </p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary">Buy Now</a>
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
                            <span>Cat:<strong>Tech</strong></span>
                        </p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary">Buy Now</a>
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
                            <span>Cat:<strong>Tech</strong></span>
                        </p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary">Buy Now</a>
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
    <script>
        $('.q_minus').click(function(){
            var v = $('.remove_number_appearance').val();
            v = v-1;
            if(v < 2){
                v = 1;
            }
            $('.remove_number_appearance').val(v);
        });
        $('.q_plus').click(function(){
            var v = $('.remove_number_appearance').val();
            v = parseInt(v)+1;
            // if(v < 2){
            //     v = 1;
            // }
            $('.remove_number_appearance').val(v);
        });
    </script>
</body>
</html>