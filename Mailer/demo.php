<?php 
require_once("auto.php");
$name = "abc";
ob_start();
include_once("formEmail.php");
$content = ob_get_clean();
send_email("vipcristedo@gmail.com","Sáng",$content,"demo")
 ?>