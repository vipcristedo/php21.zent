<?php 
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
if(isset($_POST['submit'])){
$target_dir = "uploads/";  // thư mục chứa file upload

$target_file = $target_dir . basename($_FILES["fileIMG"]["name"]); // link sẽ upload file lên
if (move_uploaded_file($_FILES["fileIMG"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
    echo "The file ". basename( $_FILES["fileIMG"]["name"]). " has been uploaded.";
} else { // Upload file có lỗi 
    echo "Sorry, there was an error uploading your file.";
}

$id = "id".time();
$_SESSION[$id]= array(
	"name" => $_FILES["fileIMG"]["name"],
	"fileName" => $_POST["fileName"]
);}
header("Location:index.php");
?>