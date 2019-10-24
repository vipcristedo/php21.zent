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
		<form action="add_process.php" method="POST" role="form">
			<legend class="text-center">ZENT GROUP - PHP - Thực hành về gửi dữ liệu dùng POST</legend>
			
			<div class="form-group">
				<label for="">Mã sinh viên</label>
				<p class="text-danger"><?= isset($_COOKIE["mSV"])? $_COOKIE["mSV"]:""; ?></p>
				<input type="text" class="form-control" id="" placeholder="Nhập mã sinh viên" name="mSV">
			</div>
			<div class="form-group">
				<label for="">Họ và tên</label>
				<p class="text-danger"><?= isset($_COOKIE["hoTen"])? $_COOKIE["hoTen"]:""; ?></p>
				<input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="hoTen">
			</div>
			<div class="form-group">
				<label for="">Số điện thoại</label>
				<p class="text-danger"><?= isset($_COOKIE["sDT"])? $_COOKIE["sDT"]:""; ?></p>
				<input type="text" class="form-control" id="" placeholder="Nhập số điện thoại" name="sDT">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<p class="text-danger"><?= isset($_COOKIE["email"])? $_COOKIE["email"]:""; ?></p>
				<input type="email" class="form-control" id="" placeholder="Nhập vào email" name="email">
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
				<p class="text-danger"><?= isset($_COOKIE["diaChi"])? $_COOKIE["diaChi"]:""; ?></p>
				<input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="diaChi">
			</div>
			
			<button type="submit" class="btn btn-primary">Lưu thông tin</button>
		</form>
	</div>
</body>
</html>