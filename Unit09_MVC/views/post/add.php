<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add new post</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">Add New Category</h3>
    <a href="index.php?mod=user&act=list" class="btn btn-success">Back</a>
    <hr>
        <form action="index.php?mod=user&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="Title..." name="title">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="Description..." name="description">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" placeholder="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea class="form-control" rows="10" cols="40" name="content" placeholder="Content..."></textarea>
            </div>
            <div class="form-group">
                <label for="">User Id</label>
                <select class="form-control" name="user_id">
                <?php foreach ($users as $key => $value) { ?>
                    <option value="<?= $value['id']?>">
                        <?= $value['name'] ?>
                    </option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Category Id</label>
                <select class="form-control" name="category_id">
                <?php foreach ($categories as $key => $value) { ?>
                    <option value="<?= $value['id']?>">
                        <?= $value['name'] ?>
                    </option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">View count</label>
                <input type="number" min="0" class="form-control" id="" placeholder="" name="view_count">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" id="" placeholder="" name="created_at" value="<?= date('Y-m-d H:i:s'); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Creat</button>
        </form>
    </div>
</body>
</html>