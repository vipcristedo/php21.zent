<?php 
	for ($i=0; $i < 7; $i++) { 
		for ($j=0; $j < 7; $j++) { 
			if ($j>=$i) {
				echo "#&nbsp";
			}else{
				echo "&nbsp&nbsp&nbsp";
			}
		}
		echo "<br>";
	}
 ?>