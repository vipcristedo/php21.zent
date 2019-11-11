<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thêm mới người dùng</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">Thêm Mới Người Dùng</h3>
    <a href="index.php?mod=user&act=list" class="btn btn-success">Trở lại</a>
    <hr>
        <form action="index.php?mod=user&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">email</label>
                <input type="email" class="form-control" id="" placeholder="" name="email">
            </div>
            <div class="form-group">
                <label for="">mật khẩu</label>
                <input type="password" class="form-control" id="" placeholder="" name="password">
            </div>
            <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" class="form-control" id="" placeholder="" name="avatar">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" id="" placeholder="" name="created_at" value="<?= date('Y-m-d H:i:s'); ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Tạo mới</button>
            </div>
        </form>
    </div>
</body>
</html>s