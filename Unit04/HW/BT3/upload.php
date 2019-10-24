<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload</title>
	<style type="text/css">*{vertical-align: middle!important;	}</style>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<legend class="text-center"><h1>upload document</h1></legend>
		<p><a href="index.php" class="btn btn-success">Trờ lại</a></p>
		<table class="table table-bordered">
			<tbody>
				<form action="data.php" method="post" enctype="multipart/form-data">
				<tr>
					<td style="min-width: 100px">Tên tài liệu</td>
					<td><input type="text" name="fileName" width="100%"></td>
				</tr>
				<tr>
					<td style="min-width: 100px">Image</td>
					<td><input type="file" name="fileIMG" id="fileIMG" width="100%"></td>
				</tr>
				<tr>
					<td colspan="2"><button type="submit" name="submit">Submit</button></td>
				</tr>
				</form>
			</tbody>
		</table>
	</div>
</body>
</html>