<?php 
session_start();
$maSP=$_GET["maSP"];
unset($_SESSION["cart"][$maSP]);
header("Location:cart.php");
 ?>
