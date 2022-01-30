<?php
ob_start();
session_start();

if(isset($_SESSION['id'])){

    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    header("location: index.php");
}else{
    header("location : index.php");
}


?>