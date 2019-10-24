
<?php
	$name="no";
	$hello = "hello Sáng ";
	echo $hello.$name."!"."<br>"."hehe"."<br>"."<p><b>lele</b></p>";
	$so="10";
	echo $so +10;
	echo "<br>";
	$arr = array();
	$arr[] = "noename"; // như arr.add()
	$arr[0] = "hi"; // thay phần tử  tại 0 thành "hi"
	$arr[] = 13;
	print_r($arr);
	foreach ($arr as $key => $value) {
		echo "<br>".$value;
	}
?>