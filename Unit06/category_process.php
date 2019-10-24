<?php 
require 'connection.php';
// Lấy dữ liệu từ form gửi lên, gán vào biến data
$data = $_POST;

// Viết câu lệnh để thêm dữ liệu
$query = "INSERT INTO categories (name, description) VALUES ('".$data['name']."','".$data['description']."')";

// Thực thi câu lệnh
$result = $conn->query($query);
var_dump($result);
die();
if ($result == true) {
	header("Location:categories.php");
}else{
	header("Location:category_add.php");
}

?>