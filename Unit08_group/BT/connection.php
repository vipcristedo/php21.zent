<?php 
date_default_timezone_set('Asia/Ho_Chi_Minh');
// Thong so ket noi CSDL

$servername = "localhost"; //255.123.45.21 - Địa chỉ IP của máy chủ chứa CSDL

$username = "root";   // Tên đăng nhập

$password = "";    // Mật khẩu truy cập

$dbname = "php21_blog";   // Tên cơ sở dữ liệu muốn kết nối đến


// Tạo kết nối đến CSDL

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
if ($conn->connect_error) {
	die("Conection failed: ".$conn->connect_error);
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

    return $str.date('-d-m-Y-H-i-s');
}
 ?>