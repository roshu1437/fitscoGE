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


?>