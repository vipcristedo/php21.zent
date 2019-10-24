<?php 
	$n = (double)$_GET["n"];
	echo "n= ".$n."<br>";
	$s=0;
	$add=1;	
	for ($i=1; $i <= $n; $i++) {
		$add = 1;
		for ($j=1; $j <= $i; $j++) {
			$add = $add*$j;
		}
		$s= $s + $i/$add;
	}
	echo "tổng s= ".$s;
 ?>