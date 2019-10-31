<?php 
/**
 * 
 */
class Category 
{
	var $name;
	var $slug;
	var $parent_id;
	var $thumnail;
	var $description;
	function inTT(){
		echo "<br>Thông tin cơ bản! ";
		echo "<br><b>Tên</b>: ".$this->name;
		echo "<br><b>Đường dẫn</b>: ".$this->slug;
		echo "<br><b>Danh mục cha</b>: ".$this->parent_id;
		echo "<br><b>Ảnh hiển thị</b>: ".$this->thumnail;
		echo "<br><b>Mô tả</b>: ".$this->description."<br>";
	}
}
 ?>