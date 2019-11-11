<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Categories</title>
	<style type="text/css">*{vertical-align: middle!important;	}</style>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<legend class="text-center"><h1>Categories</h1></legend>
		<?php if(isset($_COOKIE['msg'])) { ?>
			<div class="alert alert-primary" role="alert">
				<?= ($_COOKIE['msg']) ?>
			</div>
		<?php } ?>
		<p><a href="index.php?mod=category&act=add" class="btn btn-success">Add New Category</a></p>
		<table class="table table-bordered">
			<tbody>
				<tr>
					<th scope="row">STT</th>
					<th scope="row">Name</th>
					<th scope="row">Description</th>
					<th scope="row">#</th>
				</tr>
				<?php 
				foreach ($categories as $key => $value) { ?>
					<tr>
						<td>
							<?= $key+1 ?>
						</td>
						<td>
							<?= $value["name"] ?>
						</td>
						<td style="min-width: 120px">
							<?= $value["description"] ?>
						</td>
						<td>
							<a href="index.php?mod=category&act=detail&id=<?= $value['id'] ?>" class="btn btn-primary">Detail</a>
							<a href="index.php?mod=category&act=edit&id=<?= $value['id'] ?>" class="btn btn-success">Update</a>
							<a href="index.php?mod=category&act=delete&id=<?= $value['id'] ?>" class="btn btn-warning">Delete</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>