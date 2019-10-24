<?php 
	$arr = array(1,4,2,6,9,100,45,8,20);
	$max = $arr[0];
	for ($i=0; $i < count($arr); $i++) { 
		if ($max<$arr[$i]) {
			$max=$arr[$i];
		}
	}
	echo "<pre>";
		print_r($arr);
	echo "</pre>";
	echo "Số lớn nhất trong mảng là: ".$max;
 ?>