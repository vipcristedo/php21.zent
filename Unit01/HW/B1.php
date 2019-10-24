<?php
	$a = (double)$_GET["a"];
	$b = (double)$_GET["b"];
	$c = (double)$_GET["c"];
	echo "a= ".$a."<br>";
	echo "b= ".$b."<br>";
	echo "c= ".$c."<br>";
	$x1; $x2;
	$delta = $b*$b - 4*$a*$c;
	$x1= (-$b + sqrt($delta))/2*$a;
	$x2= (-$b - sqrt($delta))/2*$a;
	if ($a==0) {
		if ($b==0) {
			if($c==0){
				echo "phương trình vô số nghiệm";
			}else{
				echo "phương trình vô nghiệm";
			}
		} else{
			echo "phương trình có 1 nghiệm: x = ".(-$c/$b);
		}
	} elseif($delta==0){
		echo "phương trình có nghiệm kép:<br>x<sub>1</sub> = x<sub>2</sub> = ".$x1;
	} elseif ($delta>0) {
		echo "phương trình có 2 nghiệm:<br>";
		echo "x<sub>1</sub> = ".$x1."<br>";
		echo "x<sub>2</sub> = ".$x2."<br>";
	} elseif ($delta<0) {
		$delta = -$delta;
		$sqrt_delta=sqrt($delta);
		echo "phương trình có 2 nghiệm phức:<br>";
		echo "x<sub>1</sub> = ".(-$b/2*$a)."+".$sqrt_delta."*i<br>";
		echo "x<sub>1</sub> = ".(-$b/2*$a)."+".$sqrt_delta."*i<br>";
	}
	
?>