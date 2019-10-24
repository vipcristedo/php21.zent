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
		<legend class="text-center">ZENT GROUP - PHP - Thực hành về gửi dữ liệu dùng POST</legend>
		<?php 
		$SV = getAllStudents();
		foreach ($SV as $item){ 
		if ($item['mSV'] == $mSV){
			?>
		<ul>
			<li>Mã sinh viên: <?= $item['mSV'] ?></li>
			<li>Họ và tên: <?= $item['hoTen'] ?></li>
			<li>Số điện thoại: <?= $item['sDT'] ?></li>
			<li>Email: <?= $item['email'] ?></li>
			<li>Giới tính: <?= $item['gender'] ?></li>
			<li>Địa chỉ: <?= $item['diaChi'] ?></li>
		</ul>
		<?php } }?>
		
		<button class="btn btn-primary"><a href="list.php">Trở lại</a></button>
	</div>
</body>
</html>