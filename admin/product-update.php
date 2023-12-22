
<?php 
    include_once('../common.php');
    // Common Variables
    $m_title = 'Product Update Page';

    if(isset($_GET['update'])){
        $id = $_GET['update'];
        $q = 'SELECT * FROM products WHERE id="'.$id.'"';
        $qr = mysqli_query($con,$q);
        if($qr){
            if(mysqli_num_rows($qr) > 0){
                $product_data = mysqli_fetch_assoc($qr);
            }
        }
    }
    if(!isset($product_data)){
        $_SESSION['error'] = 'Product not available for updation';
        header('Location: '.$main_url.'admin/');
        die;
    }

?>
<!DOCTYPE html>
<html>
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
                <h1>Product Update</h1>
                <form class="row g-3" action="<?php echo $main_url; ?>actions/product-add.php" method="post" enctype="multipart/form-data">
                    <div class="col-md-4">
                        <label for="p_title" class="form-label">Product Title</label>
                        <input value="<?=$product_data['p_title']?>" type="text" class="form-control" id="p_title" name="p_title">
                    </div>
                    <div class="col-md-4">
                        <label for="p_url" class="form-label">Product URL</label>
                        <input type="text" class="form-control" id="p_url" name="p_url" value="<?=$product_data['p_url']?>">
                    </div>
                    <div class="col-md-4">
                        <label for="p_description" class="form-label">Product Description</label>
                        <input type="text" class="form-control" id="p_description" name="p_description" value="<?=$product_data['p_description']?>">
                    </div>
                    <div class="col-md-6">
                        <label for="p_image" class="form-label">Product Images</label>
                        <input class="form-control" type="file" id="p_image" multiple name="p_image[]">
                    </div>
                    <div class="col-md-2">
                        <label for="p_price" class="form-label">Product Price $</label>
                        <input type="number" class="form-control" id="p_price" name="p_price" value="<?=$product_data['p_price']?>">
                    </div>
                    <div class="col-md-2">
                        <label for="p_discount" class="form-label">Price Discount %</label>
                        <input type="number" class="form-control" id="p_discount" name="p_discount" value="<?=$product_data['p_discount']?>">
                    </div>
                    <div class="col-md-2">
                        <label for="p_quantity" class="form-label">Product Quantity</label>
                        <input type="number" class="form-control" id="p_quantity" name="p_quantity" value="<?=$product_data['p_quantity']?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Product Sizes: </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="size_s" value="small" name="size_s">
                            <label class="form-check-label" for="size_s">Small</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="size_m" value="medium" name="size_m" checked>
                            <label class="form-check-label" for="size_m">Medium</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="size_l" value="large" name="size_l">
                            <label class="form-check-label" for="size_l">Large</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Product Colors: </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="color_r" value="red" name="color_r" checked>
                            <label class="form-check-label" for="color_r">Red</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="color_g" value="green" name="color_g">
                            <label class="form-check-label" for="color_g">Green</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="color_b" value="blue" name="color_b">
                            <label class="form-check-label" for="color_b">Blue</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="p_detail" class="form-label">Product Details</label>
                        <textarea class="form-control" name="p_detail" id="p_detail" rows="10" placeholder="write product detail here"><?=$product_data['p_detail']?></textarea>
                        <p class="text-end">Total Words Limit: <strong>500</strong></p>
                    </div>
                    <div class="col-12">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="p_premium_note" id="p_premium_note">
                            <label class="form-check-label" for="p_premium_note">Is Product is Premium</label>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary" name="send_approval">Sending For Approval</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Home page cards End -->
    <?php require_once('../footer.php'); ?>
</body>
</html>