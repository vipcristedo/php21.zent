<?php 
require 'connection.php';
// Lấy dữ liệu từ form gửi lên, gán vào biến data
$data = $_POST;
$target_dir = "images/";  // thư mục chứa file upload
$target_file = $target_dir.date('-d-m-Y-H-i-s').basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
$link_anh=$target_file;
if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
	echo "The file ". basename( $_FILES["thumnail"]["name"]). " has been uploaded.";
}
$keys="";
$values="";
foreach ($_POST as $key => $value) {
	$keys.=$key.",";
	$values.="'".$value."'".",";
}
$keys=rtrim($keys,",");
$values=rtrim($values,",");
$query="INSERT INTO posts (".$keys.") VALUES (".$values.")";
die($query);
// Viết câu lệnh để thêm dữ liệu
$query = "INSERT INTO posts (title, user_id, category_id, thumbnail, slug, content, description, view_count, created_at) VALUES ('".$data['title']."',".$data['user_id'].",'".$data['category_id']."','".$link_anh."','".to_slug($data['title'])."','".$data['content']."','".$data['description']."','".$data['view_count']."','".$data['created_at']."')";
// Thực thi câu lệnh
$result = $conn->query($query);
if ($result == true) {
	header("Location:posts.php");
}else{
	header("Location:post_add.php");
}
?>