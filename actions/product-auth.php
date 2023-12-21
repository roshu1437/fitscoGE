<?php 
require_once('../common.php');
if(isset($_GET['p-approved'])){
    $id = $_GET['p-approved'];
    $q = 'SELECT p_url FROM products WHERE id="'.$id.'"';
    $qr = mysqli_query($con,$q);
    if($qr){
        if(mysqli_num_rows($qr) > 0){
            // Update Query 
            $uppdate = "UPDATE products SET p_status='1' where id='".$id."'";
            $qr = mysqli_query($con,$uppdate);
            if($qr){
                $_SESSION['success'] = 'Product Approved Successfully';
                header('Location: '.$main_url.'admin/');
            }else{
                $error = 'Something is wrong please try again to update';
            }
        }else{
            $error = 'Something is wrong please try again';
        }
    }else{
        $error = 'No product found';
    }
    if(isset($error)){
        $_SESSION['error'] = $error;
        header('Location: '.$main_url.'admin/all-pending-products.php');
    }
}
if(isset($_GET['un-approved'])){
    $id = $_GET['un-approved'];
    $q = 'SELECT p_url FROM products WHERE id="'.$id.'"';
    $qr = mysqli_query($con,$q);
    if($qr){
        if(mysqli_num_rows($qr) > 0){
            // Update Query 
            $uppdate = "UPDATE products SET p_status='2' where id='".$id."'";
            $qr = mysqli_query($con,$uppdate);
            if($qr){
                $_SESSION['success'] = 'Product Disable Successfully';
                header('Location: '.$main_url.'admin/');
            }else{
                $error = 'Something is wrong please try again to update';
            }
        }else{
            $error = 'Something is wrong please try again';
        }
    }else{
        $error = 'No product found';
    }
    if(isset($error)){
        $_SESSION['error'] = $error;
        header('Location: '.$main_url.'admin/all-products.php');
    }
}

header('Location: '.$main_url.'admin/');
?>