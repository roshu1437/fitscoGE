<?php 
require_once('../common.php');
if(isset($_POST['update'])){
    if(!empty($_POST['user_pass_old']) && !empty($_POST['user_pass']) && !empty($_POST['re_pass']) && !empty($_POST['user_id'])){
        $c_pass=$_POST['user_pass_old'];
        $pass=$_POST['user_pass'];
        $re_pass=$_POST['re_pass'];
        $id=$_POST['user_id'];
        if($pass == $re_pass){
            $q = 'SELECT password FROM user WHERE id="'.$id.'"';
            $qr = mysqli_query($con,$q);
            if($qr){
                $user = mysqli_fetch_assoc($qr);
                $old = $user['password'];
                if($old == md5($c_pass)){
                    $update = 'UPDATE user SET 
                        password="'.md5($pass).'"
                        WHERE id="'.$id.'"
                    ';
                    $qr = mysqli_query($con,$update);
                    if($qr){
                        unset($_SESSION['auth']);
                        header('Location: '.$main_url.'login.php');
                    }else{
                        $error = 'Something is wrong please try again to update profile';
                    }
                }else{
                    $error = 'Current password is incorrect';
                }
            }else{
                $error = 'User Not exist';
            }
        }else{
            $error = 'Passwords do not match';
        }
    }elseif(!empty($_POST['user_name']) && !empty($_POST['user_email']) && !empty($_POST['user_id'])){
        $name = $_POST['user_name'];
        $email = $_POST['user_email'];
        $id = $_POST['user_id'];
        $update = 'UPDATE user SET 
            name="'.$name.'",
            email="'.$email.'"
            WHERE id="'.$id.'"
        ';
        $qr = mysqli_query($con,$update);
        if($qr){
            $q = 'SELECT * FROM user WHERE id="'.$id.'"';
            $qr = mysqli_query($con,$q);
            $_SESSION['auth'] = mysqli_fetch_assoc($qr);
            header('Location: '.$main_url);
        }else{
            $error = 'Something is wrong please try again to update profile';
        }
    }else{
        $error = 'Please fill all required fields';
    }
}else{
    $error = '';
}
if(isset($error)){
    $_SESSION['error'] = $error;
    header('Location: '.$main_url.'admin/profile-update.php');
}
?>