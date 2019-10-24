<?php 
	$name  = array();
	$name["name"] = "Zent";
	$name["old"] = 10;
	$name[] = "Sáng";
	$name["mark"] = array(
		"math" => 10,
		"physics" => 8,
		"biology" => 8
	);
	echo "<pre>";
		print_r($name);
	echo "</pre>";

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title><?= $name[0] ?></title>
 </head>
 <body>
 	<ul>
 		<li>Name: <?= $name["name"] ?></li>
 		<li>Old: <?= $name["old"] ?></li>
 		<li>Old: <?= $name["mark"]["biology"] ?></li>
 	</ul>
 </body>
 </html>