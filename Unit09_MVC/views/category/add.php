<?php 
// Thong so ket noi CSDL

$servername = "localhost"; //255.123.45.21 - Địa chỉ IP của máy chủ chứa CSDL

$username = "root";   // Tên đăng nhập

$password = "";    // Mật khẩu truy cập

$dbname = "php21_blog";   // Tên cơ sở dữ liệu muốn kết nối đến


// Tạo kết nối đến CSDL

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
if ($conn->connect_error) {
	die("Conection failed: ".$conn->connect_error);
}
$query = "SELECT * FROM categories WHERE ISNULL(deleted_at) AND ISNULL(parent_id)";

// Thực thi câu lệnh
$result = $conn->query($query);
// Tạo 1 mảng để chứa dữ liệu
$categories = array();

while($row = $result->fetch_assoc()) { 
    $categories[] = $row;
}
date_default_timezone_set('Asia/Ho_Chi_Minh');
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add new category</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">Add New Category</h3>
    <a href="categories.php" class="btn btn-success">Back</a>
    <hr>
        <form action="category_add_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">Parent Id</label>
                <select class="form-control" name="parent_id">
                    <option value="NULL">Please choose parent ID</option>
                <?php foreach ($categories as $key => $value) { ?>
                    <option value="<?= $value['id']?>">
                        <?= $value['name'] ?>
                    </option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" id="" placeholder="" name="created_at" value="<?= date('Y-m-d H:i:s'); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Creat</button>
        </form>
    </div>
</body>
</html>