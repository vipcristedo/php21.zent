<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Category</title>
    <style type="text/css">*{vertical-align: middle!important;  }</style>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <legend class="text-center"><h1>Category Update</h1></legend>
        <a href="index.php?mod=category&act=list" class="btn btn-success">Back</a>
        <table class="table table-bordered">
            <tbody>
                <form action="index.php?mod=category&act=update" method="POST" role="form" enctype="multipart/form-data">
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $category_mini["name"] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Parent Id
                        </td>
                        <td>
                            <select class="form-control" name="parent_id">
                                <option value="NULL">Please choose parent ID</option>
                                <?php foreach ($categories as $value) { if($value['id'] !=$value['id']){?>
                                    <option <?php if ($value['id']==$value['parent_id']) {echo "selected";} ?> value="<?= $value['id']?>">
                                        <?= $value['name'] ?>
                                    </option>
                                <?php }} ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Thumbnail
                        </td>
                        <td>
                            <img src="public/images/<?= $category_mini["thumbnail"] ?>" width="100px" height="100px">
                            <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Description
                        </td>
                        <td>
                            <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $category_mini["description"] ?>">
                        </td>
                    </tr>
                    <input type="hidden" class="form-control" id="" name="updated_at" value="<?= date('Y-m-d H:i:s') ?>">
                    <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $id ?>">
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </td>
                    </tr>
                </form>
            </tbody>
        </table>
    </div>
</body>
</html>