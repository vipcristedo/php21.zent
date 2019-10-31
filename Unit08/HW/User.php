<?php 
/**
 * 
 */
class User 
{
	var $name;
	var $email;
	var $password;
	var $avatar;
	function inTT(){
		echo "<br>Thông tin cơ bản! ";
		echo "<br><b>Tên</b>: ".$this->name;
		echo "<br><b>Email</b>: ".$this->email;
		echo "<br><b>Danh mục cha</b>: ".$this->password;
		echo "<br><b>Ảnh hiển thị</b>: ".$this->avatar."<br>";
	}
}
 ?>