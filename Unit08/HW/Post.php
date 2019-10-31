<?php 
/**
 * 
 */
class Post 
{
	var $title;
	var $slug;
	var $description;
	var $content;
	function inTT(){
		echo "<br>Thông tin cơ bản! ";
		echo "<br><b>Tiêu đề</b>: ".$this->title;
		echo "<br><b>Đường dẫn</b>: ".$this->slug;
		echo "<br><b>Mô tả</b>: ".$this->description;
		echo "<br><b>Nội dung</b>: ".$this->content."<br>";
	}
}
 ?>