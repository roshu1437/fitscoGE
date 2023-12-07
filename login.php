<?php 
    include_once('common.php');
    // Common Variables
    $m_title = 'Login Page';
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
            <h1 class="text-center">Login</h1>
            <form class="col-6 mx-auto">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-6 offset-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                            Remember
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4 text-end">
                        <a href="<?php echo $main_url; ?>forget-password.php">Forget Password</a>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
                <div class="text-center">
                    Don't have an account please <a href="<?php echo $main_url; ?>signup.php">sign up</a>
                </div>
            </form>
        </div>
    </div>
    <!-- Home page cards End -->
    <?php require_once('footer.php'); ?>
</body>
</html>