<?php 
	session_start();
	if (isset($_SESSTION["isLogin"])) {
		header("Location: login_success.php");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>b1</title>
</head>
<body>
	<form action="login.php" method="POST">
		<p><input type="" name="user" placeholder="tên đăng nhập"></p>
		<p><input type="password" name="pw"></p>
		<p><?= isset($_COOKIE["msg"])? $_COOKIE["msg"]:""; ?></p>
		<input type="submit" name="" value="submit">
	</form>
</body>
</html>