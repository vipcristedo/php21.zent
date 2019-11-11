<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Post</title>
    <style type="text/css">*{vertical-align: middle!important;  }</style>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <legend class="text-center"><h1>Post Update</h1></legend>
        
        <table class="table table-bordered">
            <tbody>
                <form action="post_update_process.php" method="POST" role="form" enctype="multipart/form-data">
                    <tr>
                        <td>
                            Title
                        </td>
                        <td>
                            <input type="text" class="form-control" id="" placeholder="" name="title" value="<?= $post_mini["title"] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Description
                        </td>
                        <td>
                            <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $post_mini["description"] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Thumbnail
                        </td>

                        <td>
                            <img src="<?= $post_mini["thumbnail"] ?>" width="100px" height="100px">
                            <input type="file" class="form-control" id="" placeholder="" name="thumbnail" value="<?= $post_mini["thumbnail"] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            User Id
                        </td>
                        <td>
                            <select class="form-control" name="user_id">
                                <?php foreach ($users as $value) { if($value['id'] !=$post_mini['id']){?>
                                    <option <?php if ($value['id']==$post_mini['user_id']) {echo "selected";} ?> value="<?= $value['id']?>">
                                        <?= $value['name'] ?>
                                    </option>
                                <?php }} ?>
                            </select>
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            Category Id
                        </td>
                        <td>
                            <select class="form-control" name="category_id">
                                <?php foreach ($categories as $value) { if($value['id'] !=$post_mini['id']){?>
                                    <option <?php if ($value['id']==$post_mini['category_id']) {echo "selected";} ?> value="<?= $value['id']?>">
                                        <?= $value['name'] ?>
                                    </option>
                                <?php }} ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Content
                        </td>
                        <td>
                            <textarea class="form-control" rows="10" cols="40" name="content"><?= $post_mini['content'] ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            View count
                        </td>
                        <td>
                            <input type="number" class="form-control" min="0" placeholder="" name="view_count" value="<?= $post_mini["view_count"] ?>">
                        </td>
                    </tr>
                    <input type="hidden" class="form-control" id="" name="updated_at" value="<?= date('Y-m-d H:i:s') ?>">
                    <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $id ?>">
                    <tr>
                        <td colspan="2">
                            <a href="posts.php" class="btn btn-success">Back</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </td>
                    </tr>
                </form>
            </tbody>
        </table>
    </div>
</body>
</html>