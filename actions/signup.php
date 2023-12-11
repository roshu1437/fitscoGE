<?php 
require_once('../common.php');
if(isset($_POST['signup'])){
    if(!empty($_POST['user_name']) && !empty($_POST['user_email']) && !empty($_POST['user_pass']) && !empty($_POST['re_pass'])){
        $pass=$_POST['user_pass'];
        $re_pass=$_POST['re_pass'];
        if($pass == $re_pass){
            $name = $_POST['user_name'];
            $email = $_POST['user_email'];
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