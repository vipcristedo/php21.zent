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
		<a href="index.php?mod=user&act=list" class="btn btn-success">Trở lại</a>
		<table class="table table-bordered">
			<tbody>
				
				<tr>
					<td>
						Id
					</td>
					<td>
						<?= $user_mini["id"] ?>
					</td>
				</tr>
				<tr>
					<td>
						Tên
					</td>
					<td>
						<?= $user_mini["name"] ?>
					</td>
				</tr>
				<tr>
					<td>
						Email
					</td>
					<td>
						<?= $user_mini["email"] ?>
					</td>
				</tr>
				<tr>
					<td>
						Mật khẩu
					</td>
					<td>
						<?= $user_mini["password"] ?>
					</td>
				</tr>
				<tr>
					<td>
						Avatar
					</td>
					<td>
						<img src="public/images/<?= $user_mini["avatar"] ?>" width="100px" height="100px">
					</td>
				</tr>
				<tr>
					<td>
						Ngày tạo
					</td>
					<td>
						<?= $user_mini["created_at"] ?>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>