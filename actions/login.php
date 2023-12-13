<?php 
require_once('../common.php');
if(isset($_POST['login'])){
    if(!empty($_POST['user_email']) && !empty($_POST['user_pass'])){
        $email = $_POST['user_email'];
        $pass=md5($_POST['user_pass']);
        $q = 'SELECT * FROM user WHERE email="'.$email.'" and password="'.$pass.'"';
        $qr = mysqli_query($con,$q);
        if($qr){
            $user = mysqli_num_rows($qr);
            if($user > 0){
                $user_data = mysqli_fetch_assoc($qr);
                if($user_data['status'] == 1){
                    $_SESSION['auth'] = $user_data;
                    header('Location: '.$main_url);
                }else{
                    $error = 'Your Account is disabled';
                }
            }else{
                $error = 'Email or password is incorrect';
            }
        }else{
            $error = 'Please enter values again';
        }
    }else{
        $error = 'Please fill all required fields';
    }
}else{
    $error = '';
}
if(isset($error)){
    $_SESSION['error'] = $error;
    header('Location: '.$main_url.'login.php');
}
?>