
<?php 
    include_once('../common.php');
    // Common Variables
    $m_title = 'Product Add Page';
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
                <?php if($pending_products > 0): ?>
                    <h1 class="text-center">Pending Product</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>P Title</th>
                                <th>P Url</th>
                                <th>P Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $number = 0; 
                            while($product_data = mysqli_fetch_assoc($pending_products_query)): 
                                $number++;
                            ?>
                                <tr>
                                    <td><?=$number?></td>
                                    <td><?=$product_data['p_title']?></td>
                                    <td><?=$product_data['p_url']?></td>
                                    <td><img src="<?=$main_url?>p-images/<?=json_decode($product_data['p_image'],true)[0]?>" height="30px"></td>
                                    <td>
                                        <a href="" class="badge btn-primary text-decoration-none">Approved</a>
                                        <a href="" class="badge btn-danger text-decoration-none">Reject</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <h1 class="text-center">No pending product available right now</h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Home page cards End -->
    <?php require_once('../footer.php'); ?>
</body>
</html>