<?php 
	session_start();
	$user = $_POST["user"];
	$pw = $_POST["pw"];
	if ($user == "admin" && $pw == "123") {
		$_SESSION["isLogin"]= true;
		echo "no";
		header("Location: login_success.php");
	} else{
		setcookie("msg","Đăng nhập thất bại",time()+2);
		header("Location: b1.php");
		echo "hihi";
	}
 ?> 