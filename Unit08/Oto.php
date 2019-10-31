<?php 
class Oto
{
	var $ten;
	var $mau;
	var $soCho;
	function chay()
	{
		echo "<br> Phương thức: chạy";
	}
	function inTT(){
		echo "<br>Thông tin cơ bản! ";
		echo "<br>Tên: ".$this->ten;
		echo "<br>Màu: ".$this->mau;
		echo "<br>Số chỗ: ".$this->soCho;
	}
	function __construct(){
		echo "Construct 2<br>";
	}
}
$bmw = new Oto();
$bmw->ten="BMW X5";
$bmw->mau="trắng";
$bmw->soCho="5";
$bmw->inTT();

 ?>