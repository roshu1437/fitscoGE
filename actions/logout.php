<?php 
require_once('../common.php');

if(isset($_SESSION['auth'])){
    unset($_SESSION['auth']);
}
header('Location: '.$main_url);
?>