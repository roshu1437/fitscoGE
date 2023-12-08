
<?php 
    include_once('../common.php');
    // Common Variables
    $m_title = 'Signup Page';
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
            <div class="col-8">

            </div>
        </div>
    </div>
    <!-- Home page cards End -->
    <?php require_once('../footer.php'); ?>
</body>
</html>