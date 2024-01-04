<?php 
session_start();
$con = mysqli_connect('localhost','root','','fitsco_ge');
if(!$con){
  die('page not accessible');
}
$main_url = 'http://localhost/fitsco/Group%20E/core-project/';

// Get All Pending Products
$q = 'Select * From Products where p_status="2"';
$pending_products_query = mysqli_query($con, $q);
$pending_products = mysqli_num_rows($pending_products_query);

// Get All Products
$q1 = 'Select * From Products where p_status="1"';
$all_products_query = mysqli_query($con, $q1);
$all_products = mysqli_num_rows($all_products_query);

// Get All Categories
$q2 = 'Select * From categories';
$all_categories_query = mysqli_query($con, $q2);
$all_categories = mysqli_num_rows($all_categories_query);

// Get All Active Categories
$q2 = 'Select * From categories where c_status="1"';
$all_active_categories_query = mysqli_query($con, $q2);
$all_active_categories = mysqli_num_rows($all_active_categories_query);


function kabeer(){
  echo 'This is first heading';
  die;
}
// kabeer();

function a1($t,$a){
  echo $t;
  // die;
}


function ed($v = 'z'){
  echo '<pre>';
  print_r($v);
  die;
}

// ed($v);


function p($v1,$v2){
  // for ($i=0; $i < 10; $i++) { 
  //   echo $i.'<br>';
  // }
  $a = $v1 + $v2; 
  return $a;
}

echo p(3,5);
die;

?>