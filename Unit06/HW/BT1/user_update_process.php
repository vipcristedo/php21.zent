<?php 
require 'connection.php';
$data = $_POST;

// Viết câu lệnh để thêm dữ liệu
$query = "UPDATE users SET name= '".$data['name']."' , email= '".$data['email']."', password= '".$data['password']."', avatar= '".$_FILES['avatar']['name']."', updated_at= '".$data['updated_at']."' WHERE id= '".$data['id']."'";
// Thực thi câu lệnh
$result = $conn->query($query);
if ($result == true) {
    header("Location:users.php");
}else{
    header("Location:user_update.php");
}
 ?>