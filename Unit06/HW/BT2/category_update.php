<?php 
require 'connection.php';
$id=$_GET["id"];
$query = "SELECT * FROM categories WHERE ISNULL(deleted_at) AND id=".$id;

// Thực thi câu lệnh
$result = $conn->query($query);
$category_mini = array();

while($row = $result->fetch_assoc()) { 
    $category_mini[] = $row;
}
$query1 = "SELECT * FROM categories WHERE ISNULL(deleted_at) AND ISNULL(parent_id)";

// Thực thi câu lệnh
$result1 = $conn->query($query1);
// Tạo 1 mảng để chứa dữ liệu
$categories = array();

while($row = $result1->fetch_assoc()) { 
    $categories[] = $row;
}
?>

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
        <a href="categories.php" class="btn btn-success">Back</a>
        <table class="table table-bordered">
            <tbody>
                <?php 
                foreach ($category_mini as $key => $value) { ?>
                    <form action="category_update_process.php" method="POST" role="form" enctype="multipart/form-data">
                        <tr>
                            <td>
                                Name
                            </td>
                            <td>
                                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $value["name"] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Parent Id
                            </td>
                            <td>
                                <select class="form-control" name="parent_id">
                                    <option value="NULL">Please choose parent ID</option>
                                    <?php foreach ($categories as $key1 => $value1) { if($value1['id'] !=$value['id']){?>
                                        <option <?php if ($value1['id']==$value['parent_id']) {echo "selected";} ?> value="<?= $value1['id']?>">
                                            <?= $value1['name'] ?>
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
                                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
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
                        <input type="hidden" class="form-control" id="" name="updated_at" value="<?= date('Y-m-d H:i:s') ?>">
                        <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $id ?>">
                        <tr>
                            <td colspan="2">
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