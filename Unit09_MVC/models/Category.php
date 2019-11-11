<?php 
	/**
	 * 
	 */
	require_once 'models/connection.php';
	class Category
	{
		var $connection_obj;
		function __construct(){
			$this->connection_obj = new Connection();
		}
		function to_slug($str) {
			$str = trim(mb_strtolower($str));
			$str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
			$str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
			$str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
			$str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
			$str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
			$str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
			$str = preg_replace('/(đ)/', 'd', $str);
			$str = preg_replace('/[^a-z0-9-\s]/', '', $str);
			$str = preg_replace('/([\s]+)/', '-', $str);
			return $str;
		}
		function getAll(){
			
			$query = "SELECT * FROM categories WHERE ISNULL(deleted_at)";

			// Thực thi câu lệnh
			$result = $this->connection_obj->conn->query($query);
			// Tạo 1 mảng để chứa dữ liệu
			$categories = array();

			while($row = $result->fetch_assoc()) { 
				$categories[] = $row;
			}
			return $categories;
		}
		//
		function find($id){
			$query = "SELECT * FROM categories WHERE ISNULL(deleted_at) AND id=".$id;

			// Thực thi câu lệnh
			$result = $this->connection_obj->conn->query($query);
			// Tạo 1 mảng để chứa dữ liệu
			$category_mini = array();

			$category_mini = $result->fetch_assoc();
			return $category_mini;
		}
		//
		function update($data){
			$target_dir = "public/images/";  // thư mục chứa file upload

			$file_name = date("Y_m_d_H_i_s_").basename($_FILES["thumbnail"]["name"]);

			$target_file = $target_dir . $file_name; // link sẽ upload file lên

			$status = move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);
			$category_mini = $this->find($data['id']);
			$place= $target_dir.$category_mini['thumbnail'];
			if ($category_mini['thumbnail']!='') {
				unlink($place);
			}
			$query = "UPDATE categories SET name= '".$data['name']."' , parent_id= ".$data['parent_id'].", thumbnail= '".$file_name."',slug= '".$this->to_slug($data['name']).date('Y-m-d-H-i-s')."', description= '".$data['description']."', updated_at= '".$data['updated_at']."' WHERE id= '".$data['id']."'";
			// Thực thi câu lệnh
			$result = $this->connection_obj->conn->query($query);
			return $result;
		}
		//
		function delete($id){
			$query = "UPDATE categories SET deleted_at='".date('Y-m-d H:i:s')."' WHERE id=".$id;
			// Thực thi câu lệnh
			$result = $this->connection_obj->conn->query($query);
		}
		//
		function create($data){
			$target_dir = "public/images/";  // thư mục chứa file upload

			$file_name = date("Y_m_d_H_i_s_") . basename($_FILES["thumbnail"]["name"]);

			$target_file = $target_dir . $file_name; // link sẽ upload file lên

			$status = move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);

			$query = "INSERT INTO categories (name, parent_id, thumbnail, slug, description, created_at) VALUES ('".$data['name']."',".$data['parent_id'].",'".$file_name."','".$this->to_slug($data['name']).date('Y-m-d-H-i-s')."','".$data['description']."','".$data['created_at']."')";
			// Thực thi câu lệnh
			$result = $this->connection_obj->conn->query($query);
			return $result;
		}
		//

	}
	?>