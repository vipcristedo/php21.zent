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

			$user_mini = $result->fetch_assoc();
			return $user_mini;
		}
		//
		function update($data){
			$target_dir = "public/images/";  // thư mục chứa file upload

			$file_name = date("Y_m_d_H_i_s_").basename($_FILES["avatar"]["name"]);

			$target_file = $target_dir . $file_name; // link sẽ upload file lên

			$status = move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
			$user_mini = $this->find($data['id']);
			$place= $target_dir.$user_mini['avatar'];
			if ($user_mini['avatar']!='') {
				unlink($place);
			}
			$query = "UPDATE users SET name= '".$data['name']."' , email= '".$data['email']."', password= '".$data['password']."', avatar= '".$file_name."', updated_at= '".$data['updated_at']."' WHERE id= '".$data['id']."'";
			// Thực thi câu lệnh
			$result = $this->connection_obj->conn->query($query);
			return $result;
		}
		//
		function delete($id){
			$query = "UPDATE users SET deleted_at='".date('Y-m-d H:i:s')."' WHERE id=".$id;
			// Thực thi câu lệnh
			$result = $this->connection_obj->conn->query($query);
		}
		//
		function create($data){
			$target_dir = "public/images/";  // thư mục chứa file upload

			$file_name = date("Y_m_d_H_i_s_") . basename($_FILES["avatar"]["name"]);

			$target_file = $target_dir . $file_name; // link sẽ upload file lên

			$status = move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);

			$query = "INSERT INTO users (name, email, password, avatar, created_at) VALUES ('".$data['name']."','".$data['email']."','".$data['password']."','".$file_name."','".$data['created_at']."')";

			// Thực thi câu lệnh
			$result = $this->connection_obj->conn->query($query);
			return $result;
		}
		//
	}
?>