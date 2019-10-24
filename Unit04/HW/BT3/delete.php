<?php
session_start();
if(isset($_GET['file'])){
    $file = $_GET['file'];
    $id = $_GET['id'];
    unlink( "uploads/".$file);
    unset($_SESSION[$id]);
    }
    header("Location:index.php");
?>