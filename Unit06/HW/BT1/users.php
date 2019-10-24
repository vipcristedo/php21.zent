<?php 
require_once 'connection.php';
$query = "SELECT * FROM users WHERE ISNULL(deleted_at)";

// Thực thi câu lệnh
$result = $conn->query($query);
// Tạo 1 mảng để chứa dữ liệu
$users = array();

while($row = $result->fetch_assoc()) { 
	$users[] = $row;
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sách người dùng</title>
	<style type="text/css">*{vertical-align: middle!important;	}</style>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<legend class="text-center"><h1>Danh Sách Người Dùng</h1></legend>
		<p><a href="user_add.php" class="btn btn-success">Thêm người dùng</a></p>
		<table class="table table-bordered">
			<tbody>
				<tr>
					<th scope="row">STT</th>
					<th scope="row">Tên</th>
					<th scope="row">email</th>
					<th scope="row">#</th>
				</tr>
				<?php 
				foreach ($users as $key => $value) { ?>
					<tr>
						<td>
							<?= $key+1 ?>
						</td>
						<td>
							<?= $value["name"] ?>
						</td>
						<td style="min-width: 120px">
							<?= $value["email"] ?>
						</td>
						<td>
							<a href="user_detail.php?id=<?= $value['id'] ?>" class="btn btn-primary">xem chi tiết</a>
							<a href="user_update.php?id=<?= $value['id'] ?>" class="btn btn-success">Cập nhật</a>
							<a href="user_delete.php?id=<?= $value['id'] ?>" class="btn btn-warning">Xóa</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>