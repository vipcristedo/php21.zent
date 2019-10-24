<?php 
session_start();
require_once("data.php");
require_once("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Giỏ hàng</title>
	<style type="text/css">*{vertical-align: middle!important;	}</style>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<legend class="text-center"><h1>GIỎ HÀNG</h1></legend>
		<p><a href="index.php" class="btn btn-success">Trở Lại Cửa Hàng</a></p>
		<table class="table table-bordered align-middle">
			<?php 
			if (isset($_SESSION["cart"])&& $_SESSION["cart"] != array()) { ?>
				<tbody class="align-middle">
					<tr>
						<th scope="row">Code</th>
						<th scope="row">Name</th>
						<th scope="row">Price</th>
						<th scope="row">Quantity</th>
						<th scope="row">#</th>
						<th scope="row">Image</th>
						<th scope="row" class="text-right">Amount</th>
					</tr>
					<?php 
					$sum=0;
					foreach ($_SESSION["cart"] as $key => $value) { 
						$maSP= $key;
						?>
						<tr>
							<td><?= $key ?></td>
							<td>
								<?= $value['name'] ?>
							</td>
							<td>
								<?= number_format($value["price"]) ?>
							</td>
							<td style="min-width: 120px">
								<a href="minus.php?<?= "maSP=".$key ?>" class="btn btn-warning">-</a>
								<?= $value["quantity"] ?>
								<?php if ($value["quantity"]<$data[$maSP]["quantity"]) { ?>
									<a href="add2cart.php?<?= "maSP=".$key ?>" class="btn btn-info">+</a>
								<?php } ?>
							</td>
							<td>
								<a href="delete.php?<?= "maSP=".$key ?>" class="btn btn-success">Remove</a>
							</td>
							<td width="116px">
								<img src="<?= $value['image'] ?>" width = "100px" height = "100px">
							</td>
							<td class="text-right">
								<?= number_format(tinhTien($value["price"],$value["quantity"])) ?>
							</td>
						</tr>
					<?php
					$sum+=tinhTien($value["price"],$value["quantity"]);
					 } ?>
					<tr>
						<td>Sum</td>
						<td class="text-right" colspan="6">
							<?= number_format($sum) ?>
						</td>
					</tr>
					<tr>
						<td>Tổng tiền bằng chữ</td>
						<td class="text-right" colspan="6">
							<?= vietThuong(convert_number_to_words($sum))." đồng" ?>
						</td>
					</tr>
					<tr>
						<td class="text-right" colspan="7">
							<a href="thanhToan.php" class="btn btn-success">Thanh toán</a>
						</td>
					</tr>
				</tbody>
			<?php }else{ ?>
				<legend class="text-center">GIỎ HÀNG CHƯA CÓ GÌ CẢ</legend>
			<?php } ?>
		</table>
	</div>
</body>
</html>