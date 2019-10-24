<?php 
	session_start();
	function getAllStudents()
	{
		return isset($_SESSION['SV']) ? $_SESSION['SV'] : array();
	}
	function getStudent($mSV)
	{
		$SV = getAllStudents();
		foreach ($SV as $item)
		{
			if ($item['mSV'] == $mSV){
				return $item;
			}
		}
		return array();
	}
	function updateStudent($mSV, $hoTen, $sDT, $email, $gender, $diaChi)
	{
		$SV = getAllStudents();
		$new_SV = array(
			'mSV' => $mSV,
			'hoTen' => $hoTen,
			'sDT' => $sDT,
			'email' => $email,
			'gender' => $gender,
			'diaChi' => $diaChi
		);
		$is_update_action = false;
		foreach ($SV as $key => $item)
		{
			if ($item['mSV'] == $mSV){
				$SV[$key] = $new_SV;
				$is_update_action = true;
			}
		}
		if (!$is_update_action){
			$SV[] = $new_SV;
		}
		$_SESSION['SV'] = $SV;
		return $SV;
	}
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
		if (empty($data['mSV'])){
			$errors['mSV'] = '*Mã sinh viên không được để trống';
		}
		if (empty($data['hoTen'])){
			$errors['hoTen'] = '*Họ và tên Không được để trống';
		}
		if (empty($data['sDT'])){
			$errors['sDT'] = '*Số điện thoại không được để trống';
		}
		if (empty($data['email'])){
			$errors['email'] = '*Email không được để trống';
		}
		if (empty($data['diaChi'])){
			$errors['diaChi'] = '*Địa chỉ không được để trống';
		}
		if (empty($errors)){
			updateStudent($data['mSV'], $data['hoTen'], $data['sDT'], $data['email'], $data['gender'], $data['diaChi']);
			header("Location:list.php");
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		a{
			text-decoration: none;
			color: inherit;
		}
		a:hover{
			text-decoration: none;
			color: inherit;
		}
		a:focus{
			text-decoration: none;
			color: inherit;
		}
	</style>
</head>
<body>
	<div class="container">
		<form method="POST" role="form">
			<legend class="text-center">ZENT GROUP - PHP - Thực hành về gửi dữ liệu dùng POST</legend>
			
			<div class="form-group">
				<label for="">Mã sinh viên</label>
				<p class="text-danger"><?= !empty($errors['mSV']) ? $errors['mSV'] : ''; ?></p>
				<input type="text" class="form-control" placeholder="Nhập mã sinh viên" name="mSV" value="<?= !empty($data['mSV']) ? $data['mSV'] : ''; ?>">
			</div>
			<div class="form-group">
				<label for="">Họ và tên</label>
				<p class="text-danger"><?= !empty($errors['hoTen']) ? $errors['hoTen'] : ''; ?></p>
				<input type="text" class="form-control" placeholder="Nhập họ và tên" name="hoTen" value="<?= !empty($data['hoTen']) ? $data['hoTen'] : ''; ?>">
			</div>
			<div class="form-group">
				<label for="">Số điện thoại</label>
				<p class="text-danger"><?= !empty($errors['sDT']) ? $errors['sDT'] : ''; ?></p>
				<input type="text" class="form-control" placeholder="Nhập số điện thoại" name="sDT" value="<?= !empty($data['sDT']) ? $data['sDT'] : ''; ?>">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<p class="text-danger"><?= !empty($errors['email']) ? $errors['email'] : ''; ?></p>
				<input type="email" class="form-control" placeholder="Nhập vào email" name="email" value="<?= !empty($data['email']) ? $data['email'] : ''; ?>">
			</div>
			<div class="form-group">
				<label for="">Giới tính</label>
				<div>
					<label class="radio-inline"><input type="radio" name="gender" checked value="Nam">Male</label>
					<label class="radio-inline"><input type="radio" name="gender" value="Nữ">Female</label>
					<label class="radio-inline"><input type="radio" name="gender" value="Khác">Other</label>
				</div>
			</div>
			<div class="form-group">
				<label for="">Địa chỉ</label>
				<p class="text-danger"><?= !empty($errors['diaChi']) ? $errors['diaChi'] : ''; ?></p>
				<input type="text" class="form-control" placeholder="Nhập vào địa chỉ" name="diaChi" value="<?= !empty($data['diaChi']) ? $data['diaChi'] : ''; ?>">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" name="add_SV" value="<?= ($is_update_action) ? "Cập nhật" : "Lưu thông tin"; ?>" />
			</div>
			<div class="form-group">
				<button class="btn btn-primary"><a href="list.php">Trở lại</a></button>
			</div>
		</form>
	</div>
</body>
</html>