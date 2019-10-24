<?php 
require 'connection.php';
$id=$_GET["id"];
$query = "SELECT * FROM categories WHERE ISNULL(deleted_at) AND id=".$id;

// Thực thi câu lệnh
$result = $conn->query($query);
$category_mini = array();

while($row = $result->fetch_assoc()) { 
	$category_mini[] = $row;
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Category</title>
	<style type="text/css">*{vertical-align: middle!important;	}</style>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<legend class="text-center"><h1>Category Infomation</h1></legend>
		<a href="categories.php" class="btn btn-success">Back</a>
		<table class="table table-bordered">
			<tbody>
				<?php 
				foreach ($category_mini as $key => $value) { ?>
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
							Name
						</td>
						<td>
							<?= $value["name"] ?>
						</td>
					</tr>
					<tr>
						<td>
							Parent Id
						</td>
						<td>
							<?= $value["parent_id"] ?>
						</td>
					</tr>
					<tr>
						<td>
							Thumbnail
						</td>
						<td>
							<img src="<?= $value["thumbnail"] ?>">
						</td>
					</tr>
					<tr>
						<td>
							Description
						</td>
						<td>
							<?= $value["description"] ?>
						</td>
					</tr>
					<tr>
						<td>
							Created At
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