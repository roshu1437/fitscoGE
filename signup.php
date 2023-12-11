
<?php 
    include_once('common.php');
    // Common Variables
    $m_title = 'Signup Page';
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
            <h1 class="text-center">Signup</h1>
            <form class="col-6 mx-auto" action="<?php echo $main_url; ?>actions/signup.php" method="post">
                <div class="row mb-3">
                    <label for="user_name" class="col-sm-3 col-form-label">User Name</label>
                    <div class="col-sm-9">
                    <input type="text" name="user_name" class="form-control" id="user_name">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="user_email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                    <input type="email" name="user_email" class="form-control" id="user_email">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="user_pass" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                    <input type="password" name="user_pass" class="form-control" id="user_pass">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="re_pass" class="col-sm-3 col-form-label">Re Password</label>
                    <div class="col-sm-9">
                    <input type="password" class="form-control" name="re_pass" id="re_pass">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="signup">Sign Up</button>
                </div>
                <div class="text-center">
                    Already have an account please <a href="<?php echo $main_url; ?>login.php">Login</a>
                </div>
            </form>
        </div>
    </div>
    <!-- Home page cards End -->
    <?php require_once('footer.php'); ?>
</body>
</html>