<?php 
session_start();
$con = mysqli_connect('localhost','root','','fitsco_ge');
if(!$con){
  die('page not accessible');
}
$main_url = 'http://localhost/fitsco/Group%20E/core-project/';


?>