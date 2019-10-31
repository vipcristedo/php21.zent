<?php 
require 'connection.php';
$id=$_GET["id"];
$query = "SELECT * FROM posts WHERE ISNULL(deleted_at) AND id=".$id;

// Thực thi câu lệnh
$result = $conn->query($query);
$post_mini = array();

while($row = $result->fetch_assoc()) { 
	$post_mini[] = $row;
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
		<legend class="text-center"><h1>Post Infomation</h1></legend>
		<a href="posts.php" class="btn btn-success">Back</a>
		<table class="table table-bordered">
			<tbody>
				<?php 
				foreach ($post_mini as $key => $value) { ?>
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
							Title
						</td>
						<td>
							<?= $value["title"] ?>
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
							Thumbnail
						</td>
						<td>
							<img src="<?= $value["thumbnail"] ?>" width="100px" height="100px">
						</td>
					</tr>
					<tr>
						<td>
							Content
						</td>
						<td>
							<?= $value["content"] ?>
						</td>
					</tr>
					<tr>
						<td>
							User Id
						</td>
						<td>
							<?= $value["user_id"] ?>
						</td>
					</tr>
					<tr>
						<td>
							Category Id
						</td>
						<td>
							<?= $value["category_id"] ?>
						</td>
					</tr>
					<tr>
						<td>
							Slug
						</td>
						<td>
							<?= $value["slug"] ?>
						</td>
					</tr>
					<tr>
						<td>
							View count
						</td>
						<td>
							<?= $value["view_count"] ?>
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