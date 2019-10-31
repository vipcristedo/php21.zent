<?php 
require 'connection.php';
$id=$_GET["id"];

$query = "SELECT * FROM posts WHERE ISNULL(deleted_at) AND id=".$id;
$result = $conn->query($query);
$post_mini = array();
while($row = $result->fetch_assoc()) { 
    $post_mini[] = $row;
}
//
$query1 = "SELECT * FROM users WHERE ISNULL(deleted_at)";
$result1 = $conn->query($query1);
$users = array();
while($row = $result1->fetch_assoc()) { 
    $users[] = $row;
}
//
$query2 = "SELECT * FROM categories WHERE ISNULL(deleted_at)";
$result2 = $conn->query($query2);
$categories = array();
while($row = $result2->fetch_assoc()) { 
    $categories[] = $row;
}
date_default_timezone_set('Asia/Ho_Chi_Minh');
 ?>

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
        <legend class="text-center"><h1>Category Update</h1></legend>
        
        <table class="table table-bordered">
            <tbody>
                <?php 
                foreach ($post_mini as $key => $value) { ?>
                    <form action="post_update_process.php" method="POST" role="form" enctype="multipart/form-data">
                        <tr>
                            <td>
                                Title
                            </td>
                            <td>
                                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?= $value["title"] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Description
                            </td>
                            <td>
                                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $value["description"] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Thumbnail
                            </td>
                            
                            <td>
                                <img src="<?= $value["thumbnail"] ?>" width="100px" height="100px">
                                <input type="file" class="form-control" id="" placeholder="" name="thumbnail" value="<?= $value["thumbnail"] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                User Id
                            </td>
                            <td>
                                <select class="form-control" name="user_id">
                                    <?php foreach ($users as $key1 => $value1) { if($value1['id'] !=$value['id']){?>
                                        <option <?php if ($value1['id']==$value['user_id']) {echo "selected";} ?> value="<?= $value1['id']?>">
                                            <?= $value1['name'] ?>
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
                                    <?php foreach ($categories as $key1 => $value1) { if($value1['id'] !=$value['id']){?>
                                        <option <?php if ($value1['id']==$value['category_id']) {echo "selected";} ?> value="<?= $value1['id']?>">
                                            <?= $value1['name'] ?>
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
                                <textarea class="form-control" rows="10" cols="40" name="content"><?= $value['content'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                View count
                            </td>
                            <td>
                                <input type="number" class="form-control" min="0" placeholder="" name="view_count" value="<?= $value["view_count"] ?>">
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
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>