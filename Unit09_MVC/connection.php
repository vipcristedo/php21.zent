<?php 
/**
 * 
 */
class Connection{
	var $conn;
	function __construct()
	{
		// Thong so ket noi CSDL

		$servername = "localhost"; //255.123.45.21 - Địa chỉ IP của máy chủ chứa CSDL

		$username = "root";   // Tên đăng nhập

		$password = "";    // Mật khẩu truy cập

		$dbname = "php21_blog";   // Tên cơ sở dữ liệu muốn kết nối đến
		// Tạo kết nối đến CSDL
		$this->conn = new mysqli($servername, $username, $password, $dbname);
		$this->conn->set_charset("utf8");
		if ($this->conn->connect_error) {
			die("Conection failed: ".$this->conn->connect_error);
		}
	}
}

$connection = new Connection();

$query = "SELECT * FROM posts WHERE ISNULL(deleted_at)";

// Thực thi câu lệnh
$result = $connection->conn->query($query);
// Tạo 1 mảng để chứa dữ liệu
$posts = array();

while($row = $result->fetch_assoc()) { 
	$posts[] = $row;
}
echo "<pre>";
	print_r($posts);
echo "</pre>";
?>