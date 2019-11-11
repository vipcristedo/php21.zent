<?php 
	/**
	 * 
	 */
	require_once 'models/connection.php';
	class Post
	{
		var $connection_obj;
		function __construct(){
			$this->connection_obj = new Connection();
		}
		//
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
		//
		function getAll(){
			$query = "SELECT * FROM posts WHERE ISNULL(deleted_at)";

			// Thực thi câu lệnh
			$result = $this->connection_obj->conn->query($query);
			// Tạo 1 mảng để chứa dữ liệu
			$posts = array();

			while($row = $result->fetch_assoc()) { 
				$posts[] = $row;
			}
			return $posts;
		}
		//
		function find($id){
			$query = "SELECT * FROM posts WHERE ISNULL(deleted_at) AND id=".$id;

			// Thực thi câu lệnh
			$result = $this->connection_obj->conn->query($query);
			// Tạo 1 mảng để chứa dữ liệu
			$post_mini = array();

			$post_mini = $result->fetch_assoc();
			return $post_mini;
		}
		//
		function update($data){
			$target_dir = "public/images/";  // thư mục chứa file upload

			$file_name = date("Y_m_d_H_i_s_").basename($_FILES["thumbnail"]["name"]);

			$target_file = $target_dir . $file_name; // link sẽ upload file lên

			$status = move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);
			$post_mini = $this->find($data['id']);
			$place= $target_dir.$post_mini['thumbnail'];
			if ($post_mini['thumbnail']!='') {
				unlink($place);
			}
			$query = "UPDATE posts SET title= '".$data['title']."' , user_id= ".$data['user_id'].", category_id= ".$data['category_id'].", content= '".$data['content']."', thumbnail= '".$file_name."', slug= '".$this->to_slug($data['title']).date('Y-m-d-H-i-s')."', description= '".$data['description']."', view_count= ".$data['view_count'].", updated_at= '".$data['updated_at']."' WHERE id= '".$data['id']."'";
			// Thực thi câu lệnh
			$result = $this->connection_obj->conn->query($query);
			return $result;
		}
		//
		function delete($id){
			$query = "UPDATE posts SET deleted_at='".date('Y-m-d H:i:s')."' WHERE id=".$id;
			// Thực thi câu lệnh
			$result = $this->connection_obj->conn->query($query);
		}
		//
		function create($data){
			$target_dir = "public/images/";  // thư mục chứa file upload

			$file_name = date("Y_m_d_H_i_s_") . basename($_FILES["thumbnail"]["name"]);

			$target_file = $target_dir . $file_name; // link sẽ upload file lên

			$status = move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);

			$query = "INSERT INTO posts (title, user_id, category_id, thumbnail, slug, content, description, view_count, created_at) VALUES ('".$data['title']."',".$data['user_id'].",'".$data['category_id']."','".$file_name."','".$this->to_slug($data['title']).date('Y-m-d-H-i-s')."','".$data['content']."','".$data['description']."','".$data['view_count']."','".$data['created_at']."')";
			// Thực thi câu lệnh
			$result = $this->connection_obj->conn->query($query);
			return $result;
		}
	}
?>