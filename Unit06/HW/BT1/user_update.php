<?php 
date_default_timezone_set('Asia/Ho_Chi_Minh');
require 'connection.php';
$id=$_GET["id"];
$query = "SELECT * FROM users WHERE ISNULL(deleted_at) AND id=".$id;

// Thực thi câu lệnh
$result = $conn->query($query);
$user_mini = array();

while($row = $result->fetch_assoc()) { 
    $user_mini[] = $row;
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Người dùng</title>
    <style type="text/css">*{vertical-align: middle!important;  }</style>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <legend class="text-center"><h1>Thông tin người dùng</h1></legend>
        <a href="users.php" class="btn btn-success">Trở lại</a>
        <table class="table table-bordered">
            <tbody>
                <?php 
                foreach ($user_mini as $key => $value) { ?>
                    <form action="user_update_process.php" method="POST" role="form" enctype="multipart/form-data">
                    <tr>
                        <td>
                            Tên
                        </td>
                        <td>
                            <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $value["name"] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email
                        </td>
                        <td>
                            <input type="email" class="form-control" id="" placeholder="" name="email" value="<?= $value["email"] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mật khẩu
                        </td>
                        <td>
                            <input type="password" class="form-control" id="" placeholder="" name="password" value="<?= $value["password"] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Avatar
                        </td>
                        <td>
                            <input type="file" class="form-control" id="" placeholder="" name="avatar" value="<?= $value["avatar"] ?>">
                        </td>
                    </tr>
                    <input type="hidden" class="form-control" id="" name="updated_at" value="<?= date('Y-m-d H:i:s') ?>">
                    <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $id ?>">
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </td>
                    </tr>
                    </form>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>