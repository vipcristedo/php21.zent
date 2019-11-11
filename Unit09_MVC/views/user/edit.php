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
        <a href="index.php?mod=user&act=list" class="btn btn-success">Trở lại</a>
        <table class="table table-bordered">
            <tbody>
                <form action="index.php?mod=user&act=update" method="POST" role="form" enctype="multipart/form-data">
                    <tr>
                        <td>
                            Tên
                        </td>
                        <td>
                            <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $user_mini["name"] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email
                        </td>
                        <td>
                            <input type="email" class="form-control" id="" placeholder="" name="email" value="<?= $user_mini["email"] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mật khẩu
                        </td>
                        <td>
                            <input type="password" class="form-control" id="" placeholder="" name="password" value="<?= $user_mini["password"] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Avatar
                        </td>

                        <td>
                            <img src="public/images/<?= $user_mini["avatar"] ?>" width="100px" height="100px">
                            <input type="file" class="form-control" id="" placeholder="" name="avatar" value="<?= $user_mini["avatar"] ?>">
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
            </tbody>
        </table>
    </div>
</body>
</html>