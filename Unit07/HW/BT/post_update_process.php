<?php 
require 'connection.php';
$data = $_POST;
$query = "SELECT * FROM posts WHERE ISNULL(deleted_at) AND id=".$data['id'];
// Thực thi câu lệnh
$result = $conn->query($query);
// Tạo 1 mảng để chứa dữ liệu
$posts = array();

while($row = $result->fetch_assoc()) { 
	$posts[] = $row;
}

// Viết câu lệnh để thêm dữ liệu
$target_dir = "images/";  // thư mục chứa file upload

$target_file = $target_dir .time(). basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên

if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
	foreach ($post_mini as $key => $value){
		unlink($value['thumbnail']);
	}
} else { // Upload file có lỗi 
    echo "Sorry, there was an error uploading your file.";
}
$query = "UPDATE posts SET title= '".$data['title']."' , user_id= ".$data['user_id'].", category_id= ".$data['category_id'].", content= '".$data['content']."', thumbnail= '".$target_file."', slug= '".to_slug($data['title'])."', description= '".$data['description']."', view_count= ".$data['view_count'].", updated_at= '".$data['updated_at']."' WHERE id= '".$data['id']."'";
// Thực thi câu lệnh
$result = $conn->query($query);
if ($result == true) {
    header("Location:posts.php");
}else{
    header("Location:post_update.php");
}
 ?>