<?php 
require_once('../common.php');
if(isset($_POST['add_category'])){ // Add category
    if(!empty($_POST['c_title']) && !empty($_POST['c_url']) && !empty($_POST['c_description'])){
        $c_url = $_POST['c_url'];
        $q = 'SELECT c_url FROM categories WHERE c_url="'.$c_url.'"';
        $qr = mysqli_query($con,$q);
        if($qr){
            if(mysqli_num_rows($qr) == 0){
                $c_title = $_POST['c_title'];
                $c_description = $_POST['c_description'];

                // Insert Query 
                $ins = "INSERT INTO categories SET 
                    c_title='".$c_title."',
                    c_url='".$c_url."',
                    c_description='".$c_description."',
                    c_status='1',
                    created_at='".time()."'
                ";
                $qr = mysqli_query($con,$ins);
                if($qr){
                    $_SESSION['success'] = 'Category Add Successfully';
                    header('Location: '.$main_url.'admin/add-category.php');
                }else{
                    $error = 'Something is wrong please try again';
                }
            }else{
                $error = 'This Category url already exist';
            }
        }else{
            $error = 'Something is wrong please try again to update';
        }
    }else{
        $error = 'Please fill all required fields';
    }
}elseif(isset($_POST['update_category'])){  // Update category
    if(!empty($_POST['c_title']) && !empty($_POST['c_url']) && !empty($_POST['c_description'])){
        $c_url = $_POST['c_url'];
        $q = 'SELECT c_url FROM categories WHERE c_url="'.$c_url.'"';
        $qr = mysqli_query($con,$q);
        if($qr){
            if(mysqli_num_rows($qr) != 0){
                $c_title = $_POST['c_title'];
                $c_description = $_POST['c_description'];
                $c_id = $_POST['c_id'];

                // Insert Query 
                $ins = "UPDATE categories SET 
                    c_title='".$c_title."',
                    c_url='".$c_url."',
                    c_description='".$c_description."',
                    c_status='1',
                    created_at='".time()."' where id='".$c_id."'";
                $qr = mysqli_query($con,$ins);
                if($qr){
                    $_SESSION['success'] = 'Category Update Successfully';
                    header('Location: '.$main_url.'admin/add-category.php');
                }else{
                    $error = 'Something is wrong please try again';
                }
            }else{
                $error = 'This Category url Not exist';
            }
        }else{
            $error = 'Something is wrong please try again to update';
        }
    }else{
        $error = 'Please fill all required fields';
    }
}elseif(isset($_GET['dell'])){  // Delete category
    if(!empty($_GET['dell'])){
        $c_id = $_GET['dell'];
        // Update Query 
        $ins = "UPDATE categories SET c_status='2' where id='".$c_id."'";
        $qr = mysqli_query($con,$ins);
        if($qr){
            $_SESSION['success'] = 'Category Deleted Successfully';
            header('Location: '.$main_url.'admin/add-category.php');
        }else{
            $error = 'Something is wrong please try again';
        }
    }else{
        $error = 'Please fill all required fields';
    }
}elseif(isset($_GET['recover'])){ // Recover category
    if(!empty($_GET['recover'])){
        $c_id = $_GET['recover'];
        // Update Query 
        $ins = "UPDATE categories SET c_status='1' where id='".$c_id."'";
        $qr = mysqli_query($con,$ins);
        if($qr){
            $_SESSION['success'] = 'Category Recover Successfully';
            header('Location: '.$main_url.'admin/add-category.php');
        }else{
            $error = 'Something is wrong please try again';
        }
    }else{
        $error = 'Please fill all required fields';
    }
}else{
    $error = '';
}
if(isset($error)){
    $_SESSION['error'] = $error;
    header('Location: '.$main_url.'admin/add-category.php');
}
?>