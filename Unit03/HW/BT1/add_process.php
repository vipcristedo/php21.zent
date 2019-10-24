<?php 
	session_start();
	$_SESSION["mSV"]=$sV;
	$SV = array();
	$_SESSION["SV"]=$SV;
	$SV["hoTen"] = $_POST["hoTen"];
	$SV["sDT"] = $_POST["sDT"];
	$SV["email"] = $_POST["email"];
	$SV["gender"] = $_POST["gender"];
	$SV["diaChi"] = $_POST["diaChi"];
	if ($SV["mSV"] != "" && $SV["hoTen"] != "" && $SV["sDT"]!="" && $SV["email"]!="" && $SV["diaChi"]!="") {
		$_SESSION["isChecked"]= true;
		header("Location: detail.php");
	} else{
		if ($SV["mSV"] == "") {setcookie("mSV","*Mã sinh viên không được để trống",time()+2);}
		if ($SV["hoTen"] == "") {setcookie("hoTen","*Họ và tên Không được để trống",time()+2);}
		if ($SV["sDT"] == "") {setcookie("sDT","*Số điện thoại không được để trống",time()+2);}
		if ($SV["email"] == "") {setcookie("email","*Email không được để trống",time()+2);}
		if ($SV["diaChi"] == "") {setcookie("diaChi","*Địa chỉ không được để trống",time()+2);}
		header("Location: add.php");
	}
 ?> 