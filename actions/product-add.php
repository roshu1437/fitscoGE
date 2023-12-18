<?php 
    // copy('https://www.weberrorfinder.com/wp-content/uploads/2019/09/logo.png','logo.png');
    die;
require_once('../common.php');
if(isset($_POST['send_approval'])){
    if(!empty($_POST['p_title']) && !empty($_POST['p_url']) && !empty($_FILES['p_image']['name']) && !empty($_POST['p_price']) && !empty($_POST['p_quantity']) && !empty($_POST['p_detail'])){

        $p_title = $_POST['p_title'];
        $p_url = $_POST['p_url'];
        $p_price = $_POST['p_price'];
        $p_quantity = $_POST['p_quantity'];
        $p_detail = $_POST['p_detail'];

        $q = 'SELECT p_url FROM products WHERE p_url="'.$p_url.'"';
        $qr = mysqli_query($con,$q);
        if($qr){
            if(mysqli_num_rows($qr) == 0){
                $images_name= array();
                foreach($_FILES['p_image']['name'] as $key => $value){
                    $temp_file = $_FILES['p_image']['tmp_name'][$key];
                    $new_name = time().'-'.$key.'-'.$value;
                    $save_image = '../p-images/'.$new_name;
                    if(move_uploaded_file($temp_file,$save_image)){
                        $images_name[]= $new_name;
                    }
                }
            }else{
                $error = 'This Product url already exist';
            }
        }else{
            $error = 'Something is wrong please try again to update';
        }
    }else{
        $error = 'Please fill all required fields';
    }
}else{
    $error = '';
}
echo '<pre>';print_r($error);die();
?>