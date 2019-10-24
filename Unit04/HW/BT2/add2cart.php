<?php 
session_start();
require_once("data.php");
$maSP = $_GET["maSP"];
if(isset($_SESSION["cart"][$maSP])){
	$_SESSION["cart"][$maSP]["quantity"]++;
	if ($_SESSION["cart"][$maSP]["quantity"] >=$data[$maSP]["quantity"] ) {
		$_SESSION["cart"][$maSP]["quantity"] = $data[$maSP]["quantity"];
	}
}else{
	$sp = $data[$maSP];
	$sp["quantity"]= 1;
	$_SESSION["cart"][$maSP] = $sp ;
}
header("Location:cart.php");
 ?>
