<?php 
require_once('../common.php');
if(isset($_POST['send_approval'])){
    if(!empty($_POST['p_title']) && !empty($_POST['p_url']) && !empty($_FILES['p_image']['name']) && !empty($_POST['p_price']) && !empty($_POST['p_quantity']) && !empty($_POST['p_detail'])){

        $p_url = $_POST['p_url'];
        $q = 'SELECT p_url FROM products WHERE p_url="'.$p_url.'"';
        $qr = mysqli_query($con,$q);
        if($qr){
            if(mysqli_num_rows($qr) == 0){
                // for images store start
                $images_name= array();
                foreach($_FILES['p_image']['name'] as $key => $value){
                    $temp_file = $_FILES['p_image']['tmp_name'][$key];
                    $new_name = time().'-'.$key.'-'.$value;
                    $save_image = '../p-images/'.$new_name;
                    if(move_uploaded_file($temp_file,$save_image)){
                        $images_name[]= $new_name;
                    }
                }
                $images_name = json_encode($images_name);
                // for images store end

                // for sizes variations store start
                $size_variations = array();
                if(isset($_POST['size_s'])){
                    $size_variations[] = $_POST['size_s'];
                }
                if(isset($_POST['size_m'])){
                    $size_variations[] = $_POST['size_m'];
                }
                if(isset($_POST['size_l'])){
                    $size_variations[] = $_POST['size_l'];
                }
                $size_variations = json_encode($size_variations);
                // for sizes variations store end
                
                // for color variations store start
                $color_variations = array();
                if(isset($_POST['color_r'])){
                    $color_variations[] = $_POST['color_r'];
                }
                if(isset($_POST['color_b'])){
                    $color_variations[] = $_POST['color_b'];
                }
                if(isset($_POST['color_g'])){
                    $color_variations[] = $_POST['color_g'];
                }
                $color_variations = json_encode($color_variations);
                // for color variations store end

                // for premium product
                $premium = 0;
                if(isset($_POST['p_premium_note'])){
                    $premium = 1;
                }
                // for premium product end

                $author_id = $_SESSION['auth']['id'];
                $p_title = $_POST['p_title'];
                $p_price = $_POST['p_price'];
                $p_quantity = $_POST['p_quantity'];
                $p_detail = $_POST['p_detail'];
                $p_description = $_POST['p_description'];
                $p_discount = $_POST['p_discount'];

                // Insert Query 
                $ins = "INSERT INTO products SET 
                    author_id='".$author_id."',
                    p_title='".$p_title."',
                    p_url='".$p_url."',
                    p_description='".$p_description."',
                    p_image='".$images_name."',
                    p_price='".$p_price."',
                    p_discount='".$p_discount."',
                    p_quantity='".$p_quantity."',
                    p_size='".$size_variations."',
                    p_color='".$color_variations."',
                    p_detail='".$p_detail."',
                    p_premium='".$premium."',
                    p_status='2',
                    p_created_at='".time()."'
                ";
                $qr = mysqli_query($con,$ins);
                if($qr){
                    $_SESSION['success'] = 'Product Add Successfully';
                    header('Location: '.$main_url.'admin/add-product.php');
                }else{
                    $error = 'Something is wrong please try again';
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
if(isset($error)){
    $_SESSION['error'] = $error;
    header('Location: '.$main_url.'admin/add-product.php');
}
?>