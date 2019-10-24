<?php 
	$string = $_GET["string"];
	$name = array();
	for ($i=0; $i < strlen($string); $i++) { 
		$name[]= substr($string,$i,1);
	}
	$down = "";
	for ($i= count($name) -1; $i >= 0  ; $i--) { 
		$down = $down.$name[$i];
	}
	if ($down == $string) {
		echo $string."<br>Là chuỗi Palindrome";
	} else{
		echo $string."<br>Không là chuỗi Palindrome";
	}
 ?>