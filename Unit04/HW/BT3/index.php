<?php 
session_start();
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
		<legend class="text-center"><h1>Documents</h1></legend>
		<p><a href="upload.php" class="btn btn-success">Upload Document</a></p>
		<table class="table table-bordered">
			<tbody>
				<tr>
					<th scope="row">no</th>
					<th scope="row">Name</th>
					<th scope="row">Download</th>
					<th scope="row">#</th>
				</tr>
				<?php 
				$i=0;
				foreach ($_SESSION as $key => $value) { $i++; ?>
					<tr>
						<td><?= $i ?></td>
						<td>
							<?= $value["fileName"] ?>
						</td>
						<td>
							<a href="download.php?<?= "file=".$value['name'] ?>" class="btn btn-success">Download</a>
						</td>
						<td>
							<a href="delete.php?<?= "file=".$value['name']."&&id=".$key ?>" class="btn btn-success">Remove</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>