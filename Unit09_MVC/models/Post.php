<?php 
	/**
	 * 
	 */
	require_once 'models/connection.php';
	class Post
	{
		function getAll(){
			$connection_obj = new Connection();

			$query = "SELECT * FROM posts WHERE ISNULL(deleted_at)";

			// Thực thi câu lệnh
			$result = $connection_obj->conn->query($query);
			// Tạo 1 mảng để chứa dữ liệu
			$posts = array();

			while($row = $result->fetch_assoc()) { 
				$posts[] = $row;
			}
			return $posts;
		}
	}
?>