<?php 
require 'connection.php';
$id=$_GET["id"];
$query = "SELECT * FROM users WHERE ISNULL(deleted_at) AND id=".$id;

// Thực thi câu lệnh
$result = $conn->query($query);
$user_mini = array();

while($row = $result->fetch_assoc()) { 
	$user_mini[] = $row;
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Người dùng</title>
	<style type="text/css">*{vertical-align: middle!important;	}</style>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<legend class="text-center"><h1>Thông tin người dùng</h1></legend>
		<a href="users.php" class="btn btn-success">Trở lại</a>
		<table class="table table-bordered">
			<tbody>
				<?php 
				foreach ($user_mini as $key => $value) { ?>
					<tr>
						<td>
							Id
						</td>
						<td>
							<?= $value["id"] ?>
						</td>
					</tr>
					<tr>
						<td>
							Tên
						</td>
						<td>
							<?= $value["name"] ?>
						</td>
					</tr>
					<tr>
						<td>
							Email
						</td>
						<td>
							<?= $value["email"] ?>
						</td>
					</tr>
					<tr>
						<td>
							Mật khẩu
						</td>
						<td>
							<?= $value["password"] ?>
						</td>
					</tr>
					<tr>
						<td>
							Avatar
						</td>
						<td>
							<img src="<?= $value["avatar"] ?>">
						</td>
					</tr>
					<tr>
						<td>
							Ngày tạo
						</td>
						<td>
							<?= $value["created_at"] ?>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>