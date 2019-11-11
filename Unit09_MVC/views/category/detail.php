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
		<a href="index.php?mod=category" class="btn btn-success">Back</a>
		<table class="table table-bordered">
			<tbody>
					<tr>
						<td>
							Id
						</td>
						<td>
							<?= $category_mini["id"] ?>
						</td>
					</tr>
					<tr>
						<td>
							Name
						</td>
						<td>
							<?= $category_mini["name"] ?>
						</td>
					</tr>
					<tr>
						<td>
							Parent Id
						</td>
						<td>
							<?= $category_mini["parent_id"] ?>
						</td>
					</tr>
					<tr>
						<td>
							Thumbnail
						</td>
						<td>
							<img src="public/images/<?= $category_mini["thumbnail"] ?>" width="100px" height="100px">
						</td>
					</tr>
					<tr>
						<td>
							Description
						</td>
						<td>
							<?= $category_mini["description"] ?>
						</td>
					</tr>
					<tr>
						<td>
							Created At
						</td>
						<td>
							<?= $category_mini["created_at"] ?>
						</td>
					</tr>
			</tbody>
		</table>
	</div>
</body>
</html>