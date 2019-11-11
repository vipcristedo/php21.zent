<?php 
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
    
    $target_dir = "uploads/";  // thư mục chứa file upload

    $target_file = $target_dir . date("Y_m_d_h_i_s_") . basename($_FILES["ANH_SP"]["name"]); // link sẽ upload file lên
    
    $status=move_uploaded_file($_FILES["ANH_SP"]["tmp_name"], $target_file);
    if ($status) { // nếu upload file không có lỗi 
        echo "The file ". basename( $_FILES["ANH_SP"]["name"]). " has been uploaded.";
    } else { // Upload file có lỗi 
        echo "Sorry, there was an error uploading your file.";
    }
$id = "id".time();
$_SESSION[$id]= array(
	"name" => $_FILES["ANH_SP"]["name"],
	"fileName" => $_POST["fileName"]
);
    echo "<pre>";
    	print_r($_SESSION) ;
    echo "</pre>";
    echo "<pre>";
        print_r($_FILES) ;
    echo "</pre>";
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		test
 	</title>
 </head>
 <body>
 	<form action="" method="post" enctype="multipart/form-data">
 		<input type="file" name="ANH_SP" id="ANH_SP">
 		<button type="submit" name="submit">Submit</button>
 	</form>
 </body>
 </html>