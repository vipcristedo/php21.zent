<?php 
	$string = $_GET["string"];
	str_replace("([\s]+)"," ",$string);
	if (strpos ($string, " ") == 0) {
		$string = substr($string,1);
	}
	if ($string == "") {
		echo "Không nhập gì mà đòi ra họ tên???";
	}else{
		$string2 = explode(" ",$string);
		$name = array();
		for ($i=0; $i < count($string2); $i++) { 
			if ($string2[$i]!= "") {
				$name[]= $string2[$i];
			}
		}
		$string="";
		for ($i=0; $i < count($name); $i++) { 
			$name[$i] = ucfirst($name[$i]);
			$string.= $name[$i]." ";
		}
		$ten_dem ="";
		for ($i=1; $i < count($name) -1 ; $i++) { 
			$ten_dem.= $name[$i]." ";
		}
		if (count($name) == 1) {
			echo "Họ: Không họ <br>";
			echo "Tên đệm: Không tên đệm <br>";
		} elseif (count($name) == 2) {
			echo "Họ: ".$name[0]."<br>";
			echo "Tên Đệm: Không tên đệm <br>";
		} elseif (count($name) > 2){
			echo "Họ: ".$name[0]."<br>";
			echo "Họ: ".$ten_dem."<br>";
		}
		echo "Tên: ".$name[count($name)-1]."<br>";
	}
 ?>