<?php 
require_once('../common.php');
if(isset($_POST['signup'])){
    if(!empty($_POST['user_name']) && !empty($_POST['user_email']) && !empty($_POST['user_pass']) && !empty($_POST['re_pass'])){
        $pass=$_POST['user_pass'];
        $re_pass=$_POST['re_pass'];
        if($pass == $re_pass){
            $name = $_POST['user_name'];
            $email = $_POST['user_email'];
            $q = 'SELECT * FROM user WHERE email="'.$email.'"';
            $qr = mysqli_query($con,$q);
            if($qr){
                $user = mysqli_num_rows($qr);
                if($user == 0){
                    $ins = 'INSERT INTO user SET 
                        name="'.$name.'",
                        email="'.$email.'",
                        password="'.md5($pass).'",
                        type="1",
                        created_at="'.time().'",
                        status="1"
                    ';
                    $qr = mysqli_query($con,$ins);
                    if($qr){
                        header('Location: '.$main_url.'login.php');
                    }else{
                        $error = 'Something is wrong please try again';
                    }
                }else{
                    $error = 'This email address is already taken.';
                }
            }else{
                $error = 'Please enter values again';
            }
        }else{
            $error = 'Passwords do not match';
        }
    }else{
        $error = 'Please fill all required fields';
    }
}else{
    $error = '';
}
if(isset($error)){
    $_SESSION['error'] = $error;
    header('Location: '.$main_url.'signup.php');
}
?>