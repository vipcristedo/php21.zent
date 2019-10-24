<?php 
require 'connection.php';
// Lấy dữ liệu từ form gửi lên, gán vào biến data
$data = $_POST;

// Viết câu lệnh để thêm dữ liệu
$query = "INSERT INTO users (name, email, password, avatar, created_at) VALUES ('".$data['name']."','".$data['email']."','".$data['password']."','".$_FILES['avatar']['name']."','".$data['created_at']."')";

// Thực thi câu lệnh
$result = $conn->query($query);
if ($result == true) {
	header("Location:users.php");
}else{
	header("Location:user_add.php");
}
 ?>