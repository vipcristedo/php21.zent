<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Post</title>
	<style type="text/css">*{vertical-align: middle!important;	}</style>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<legend class="text-center"><h1>Post Infomation</h1></legend>
		<a href="index.php?mod=post&act=list" class="btn btn-success">Back</a>
		<table class="table table-bordered">
			<tbody>
				<tr>
					<td>
						Id
					</td>
					<td>
						<?= $post_mini["id"] ?>
					</td>
				</tr>
				<tr>
					<td>
						Title
					</td>
					<td>
						<?= $post_mini["title"] ?>
					</td>
				</tr>
				<tr>
					<td>
						Description
					</td>
					<td>
						<?= $post_mini["description"] ?>
					</td>
				</tr>
				<tr>
					<td>
						Thumbnail
					</td>
					<td>
						<img src="<?= $post_mini["thumbnail"] ?>" width="100px" height="100px">
					</td>
				</tr>
				<tr>
					<td>
						Content
					</td>
					<td>
						<?= $post_mini["content"] ?>
					</td>
				</tr>
				<tr>
					<td>
						User Id
					</td>
					<td>
						<?= $post_mini["user_id"] ?>
					</td>
				</tr>
				<tr>
					<td>
						Category Id
					</td>
					<td>
						<?= $post_mini["category_id"] ?>
					</td>
				</tr>
				<tr>
					<td>
						Slug
					</td>
					<td>
						<?= $post_mini["slug"] ?>
					</td>
				</tr>
				<tr>
					<td>
						View count
					</td>
					<td>
						<?= $post_mini["view_count"] ?>
					</td>
				</tr>
				<tr>
					<td>
						Created At
					</td>
					<td>
						<?= $post_mini["created_at"] ?>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>