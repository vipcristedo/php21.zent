<?php 
	/**
	 * 
	 */
	require_once 'models/connection.php';
	class User
	{
		var $connection_obj;
		function __construct(){
			$this->connection_obj = new Connection();
		}
		//
		function getAll(){
			$query = "SELECT * FROM users WHERE ISNULL(deleted_at)";

			// Thực thi câu lệnh
			$result = $this->connection_obj->conn->query($query);
			// Tạo 1 mảng để chứa dữ liệu
			$users = array();

			while($row = $result->fetch_assoc()) { 
				$users[] = $row;
			}
			return $users;
		}
		//
		function find($id){
			$query = "SELECT * FROM users WHERE ISNULL(deleted_at) AND id=".$id;

			// Thực thi câu lệnh
			$result = $this->connection_obj->conn->query($query);
			// Tạo 1 mảng để chứa dữ liệu
			$user_mini = array();

			while($row = $result->fetch_assoc()) { 
				$user_mini[] = $row;
			}
			return $user_mini;
		}
	}
?>