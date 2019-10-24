<?php 
date_default_timezone_set('Asia/Ho_Chi_Minh');
require 'connection.php';
$id=$_GET["id"];
$query = "UPDATE users SET deleted_at='".date('Y-m-d H:i:s')."' WHERE id=".$id;

// Thực thi câu lệnh
$result = $conn->query($query);
header("Location:users.php");
 ?>