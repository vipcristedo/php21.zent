<?php 
require 'connection.php';
$data = $_POST;
// Viết câu lệnh để thêm dữ liệu
$query = "UPDATE categories SET name= '".$data['name']."' , parent_id= ".$data['parent_id'].", thumbnail= '/".$_FILES['thumbnail']['name']."', slug= '".to_slug($data['name'])."', description= '".$data['description']."', updated_at= '".$data['updated_at']."' WHERE id= '".$data['id']."'";
// Thực thi câu lệnh
$result = $conn->query($query);
if ($result == true) {
    header("Location:categories.php");
}else{
    header("Location:category_update.php");
}
 ?>