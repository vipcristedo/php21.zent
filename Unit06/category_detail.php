<?php 
require 'connection.php';
$id=$_GET["id"];
$query = "SELECT * FROM categories WHERE ISNULL(deleted_at) AND id=".$id;

// Thực thi câu lệnh
$result = $conn->query($query);
$categories_mini = array();

while($row = $result->fetch_assoc()) { 
	$categories_mini[] = $row;
}

     echo "<pre>";
          print_r($categories_mini);
     echo "</pre>";

 ?>