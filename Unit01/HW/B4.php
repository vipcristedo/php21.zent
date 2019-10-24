<?php 
	for ($i=1; $i < 10; $i++) { 
		for ($j=1; $j < 10; $j++) { 
			$ij = $i."x".$j."=".($i*$j);
			if ($i*$j<10) {
				echo $ij."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			}else{
				echo $ij."&nbsp&nbsp&nbsp&nbsp&nbsp";
			}
		}
		echo "<br>";
	}
 ?>