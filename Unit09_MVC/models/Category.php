<?php 
	/**
	 * 
	 */
	require_once 'models/connection.php';
	class Category
	{
		function getAll(){
			$connection_obj = new Connection();

			$query = "SELECT * FROM categories WHERE ISNULL(deleted_at)";

			// Thực thi câu lệnh
			$result = $connection_obj->conn->query($query);
			// Tạo 1 mảng để chứa dữ liệu
			$categories = array();

			while($row = $result->fetch_assoc()) { 
				$categories[] = $row;
			}
			return $categories;
		}
	}
?>