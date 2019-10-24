<?php 
session_start();
require_once("data.php");
$maSP = $_GET["maSP"];
if(isset($_SESSION["cart"][$maSP])){
	$_SESSION["cart"][$maSP]["quantity"]--;
	if ($_SESSION["cart"][$maSP]["quantity"] ==0 ) {
		unset($_SESSION["cart"][$maSP]);
	}
}
header("Location:cart.php");
 ?>
