<?php 
require 'connection.php';
// Lấy dữ liệu từ form gửi lên, gán vào biến data
$data = $_POST;
// Viết câu lệnh để thêm dữ liệu
$query = "INSERT INTO categories (name, parent_id, thumbnail, slug, description, created_at) VALUES ('".$data['name']."',".$data['parent_id'].",'".$_FILES['thumbnail']['name']."','".to_slug($data['name'])."','".$data['description']."','".$data['created_at']."')";
// Thực thi câu lệnh
$result = $conn->query($query);
if ($result == true) {
	header("Location:categories.php");
}else{
	header("Location:category_add.php");
}
 ?>