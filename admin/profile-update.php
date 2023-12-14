
<?php 
    include_once('../common.php');
    if(!isset($_SESSION['auth'])){
        header('Location: '.$main_url.'login.php');
    }
    // Common Variables
    $m_title = 'Update Profile Page';
    //echo '<pre>';print_r($_SESSION['auth']);die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../header.php'); ?>
</head>
<body>
    <?php require_once('../navbar.php'); ?>
    <!-- Home page cards -->
    <div class="container my-4">
        <div class="row mx-0">
            <h1 class="text-center">Profile Update</h1>
            <form class="col-6 mx-auto" action="<?php echo $main_url; ?>actions/profile-update.php" method="post">
                <div class="row mb-3">
                    <label for="user_name" class="col-sm-3 col-form-label">User Name</label>
                    <div class="col-sm-9">
                    <input type="text" value="<?php echo $_SESSION['auth']['name']; ?>" name="user_name" class="form-control" id="user_name">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="user_email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                    <input type="email" value="<?=$_SESSION['auth']['email']; ?>" readonly name="user_email" class="form-control" id="user_email">
                    </div>
                </div>
                <h4 class="text-center">Password Update</h4>
                <div class="row mb-3">
                    <label for="user_pass_old" class="col-sm-3 col-form-label">Old Password</label>
                    <div class="col-sm-9">
                    <input type="password" name="user_pass_old" class="form-control" id="user_pass_old">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="user_pass" class="col-sm-3 col-form-label">New Password</label>
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
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                </div>
                <input type="hidden" name="user_id" value="<?=$_SESSION['auth']['id']; ?>">
            </form>
        </div>
    </div>
    <!-- Home page cards End -->
    <?php require_once('../footer.php'); ?>
</body>
</html>