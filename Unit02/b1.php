<?php 
	$name  = array();
	$name[] = "Zent";
	$name[] = 10;
	$name[] = "Sáng";
	var_dump($name);

	echo "<pre>";
		print_r($name);
	echo "</pre>";

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title><?= $name[1] ?></title> <!-- như php echo -->
 </head>
 <body>
 	
 </body>
 </html>