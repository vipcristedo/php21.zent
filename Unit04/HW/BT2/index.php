<?php 
session_start();
require_once("data.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sách sản phẩm</title>
	<style type="text/css">*{vertical-align: middle!important;	}</style>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<legend class="text-center"><h1>Danh Sách Sản Phẩm</h1></legend>
		<p><a href="cart.php" class="btn btn-success">Xem giỏ hàng</a></p>
		<table class="table table-bordered">
			<tbody>
				<tr>
					<th scope="row">Code</th>
					<th scope="row">Name</th>
					<th scope="row">Price</th>
					<th scope="row">Quantity</th>
					<th scope="row">Image</th>
					<th scope="row">#</th>
				</tr>
				<?php 
				foreach ($data as $key => $value) { ?>
					<tr>
						<td><?= $key ?></td>
						<td>
							<?= $value["name"] ?>
						</td>
						<td>
							<?= number_format($value["price"]) ?>
						</td>
						<td style="min-width: 120px">
							<?= $value["quantity"] ?>
						</td>
						<td width="116px">
							<img src="<?= $value['image'] ?>" width = "100px" height = "100px">
						</td>
						<td>
							<a href="add2cart.php?<?= "maSP=".$key ?>" class="btn btn-success">Add to Cart</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>