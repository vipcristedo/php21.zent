<?php 
	session_start();
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
</head>
<body>
	<div class="container">
		<legend class="text-center">ZENT GROUP - PHP - Thực hành về gửi dữ liệu dùng POST</legend>
		<ul>
			<li>Mã sinh viên: <?=  $_SESSION["SV"]["mSV"] ?></li>
			<li>Họ và tên: <?=  $_SESSION["SV"]["hoTen"] ?></li>
			<li>Số điện thoại: <?=  $_SESSION["SV"]["sDT"] ?></li>
			<li>Email: <?=  $_SESSION["SV"]["email"] ?></li>
			<li>Giới tính: <?=  $_SESSION["SV"]["gender"] ?></li>
			<li>Địa chỉ: <?=  $_SESSION["SV"]["diaChi"] ?></li>
		</ul>
	</div>
</body>
</html>