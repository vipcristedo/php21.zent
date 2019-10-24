<?php 
	session_start();
	if (!isset($_SESSION["isLogin"])) {
		header("Location: b1.php");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Perfect</h1>
	<a href="logout.php">log out</a>
</body>
</html>