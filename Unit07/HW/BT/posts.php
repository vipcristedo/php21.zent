<?php 
require_once 'connection.php';
$query = "SELECT * FROM posts WHERE ISNULL(deleted_at)";

// Thực thi câu lệnh
$result = $conn->query($query);
// Tạo 1 mảng để chứa dữ liệu
$posts = array();

while($row = $result->fetch_assoc()) { 
	$posts[] = $row;
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Posts</title>
	<style type="text/css">*{vertical-align: middle!important;	}</style>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<legend class="text-center"><h1>Posts</h1></legend>
		<p><a href="post_add.php" class="btn btn-success">Add New Post</a></p>
		<table class="table table-bordered">
			<tbody>
				<tr>
					<th scope="row">STT</th>
					<th scope="row">Title</th>
					<th scope="row">Description</th>
					<th scope="row">#</th>
				</tr>
				<?php 
				foreach ($posts as $key => $value) { ?>
					<tr>
						<td>
							<?= $key+1 ?>
						</td>
						<td>
							<?= $value["title"] ?>
						</td>
						<td style="min-width: 120px">
							<?= $value["description"] ?>
						</td>
						<td>
							<a href="post_detail.php?id=<?= $value['id'] ?>" class="btn btn-primary	">Detail</a>
							<a href="post_update.php?id=<?= $value['id'] ?>" class="btn btn-success">Update</a>
							<a href="post_delete.php?id=<?= $value['id'] ?>" class="btn btn-warning">Delete</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>