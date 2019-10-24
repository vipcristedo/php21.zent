<?php 
	session_start();

	$data = array();
	$errors = array();
	$is_update_action = false;
	if (!empty($_GET['mSV']))
	{
		$data = getStudent($_GET['mSV']);
		$is_update_action  = true;
	}
	if (!empty($_POST['add_SV']))
	{
		$data['mSV'] = isset($_POST['mSV']) ? $_POST['mSV'] : '';
		$data['hoTen'] = isset($_POST['hoTen']) ? $_POST['hoTen'] : '';
		$data['sDT'] = isset($_POST['sDT']) ? $_POST['sDT'] : '';
		$data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
		$data['gender'] = isset($_POST['gender']) ? $_POST['gender'] : '';
		$data['diaChi'] = isset($_POST['diaChi']) ? $_POST['diaChi'] : '';
		if ($data['mSV'] != "" && $data['hoTen'] != "" && $data['sDT']!="" && $data['email']!="" && $_$data['diaChi']!="") 
		{
			$_SESSION["isChecked"]= true;
			header("Location: list.php");
		} else{
			if (empty($data['mSV'])){setcookie("mSV","*Mã sinh viên không được để trống",time()+2);}
			if (empty($data['hoTen'])){setcookie("hoTen","*Họ và tên Không được để trống",time()+2);}
			if (empty($data['sDT'])){setcookie("sDT","*Số điện thoại không được để trống",time()+2);}
			if (empty($data['email'])){setcookie("email","*Email không được để trống",time()+2);}
			if (empty($data['sDT'])){setcookie("email","*Số điện thoại không được để trống",time()+2);}
			if (empty($data['diaChi'])){setcookie("diaChi","*Địa chỉ không được để trống",time()+2);}
			header("Location: add.php");
		}
	}
 ?> 