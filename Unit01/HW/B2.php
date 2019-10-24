<?php 
	$a = (double)$_GET["a"];
	$b = (double)$_GET["b"];
	echo "a= ".$a."<br>";
	echo "b= ".$b."<br>";
	if ($a==0) {
		if ($b==0) {
			echo "phương trình vô số nghiệm";
		} else{
			echo "phương trình vô nghiệm";
		}
	}else{
		echo "phương trình có 1 nghiệm: x= ".(-$b/$a);
	}
 ?>