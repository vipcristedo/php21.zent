<?php 
require 'connection.php';
// Câu lệnh truy vấn
$query = "SELECT * FROM categories";

// Thực thi câu lệnh
$result = $conn->query($query);
// Tạo 1 mảng để chứa dữ liệu
$categories = array();

while($row = $result->fetch_assoc()) { 
	$categories[] = $row;
}

     echo "<pre>";
          print_r($categories);
     echo "</pre>";


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
					<th scope="row">Name</th>
					<th scope="row">Description</th>
					<th scope="row">#</th>
				</tr>
				<?php 
				foreach ($categories as $key => $value) { ?>
					<tr>
						<td>
							<?= $value["name"] ?>
						</td>
						<td style="min-width: 120px">
							<?= $value["description"] ?>
						</td>
						<td>
							<a href="category_detail.php?id=<?= $value['id'] ?>" class="btn btn-success">xem chi tiết</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>