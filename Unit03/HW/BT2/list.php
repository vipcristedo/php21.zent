<?php 
	session_start();
	function getAllStudents()
	{
		return isset($_SESSION['SV']) ? $_SESSION['SV'] : array();
	}
	function getStudent($mSV)
	{
		$SV = getAllStudents();
		foreach ($SV as $item)
		{
			if ($item['mSV'] == $mSV){
				return $item;
			}
		}
		return array();
	}
	function deleteStudent($mSV)
	{
		$SV = getAllStudents();
		foreach ($SV as $key => $item)
		{
			if ($item['mSV'] == $mSV){
				unset($SV[$key]);
			}
		}
		$_SESSION['SV'] = $SV;
		return $SV;
	}
	function updateStudent($mSV, $hoTen, $sDT, $email, $gender, $diaChi)
	{
		$SV = getAllStudents();
		$new_SV = array(
			'mSV' => $mSV,
			'hoTen' => $hoTen,
			'sDT' => $sDT,
			'email' => $email,
			'gender' => $gender,
			'diaChi' => $diaChi
		);
		$is_update_action = false;
		foreach ($SV as $key => $item)
		{
			if ($item['mSV'] == $mSV){
				$SV[$key] = $new_SV;
				$is_update_action = true;
			}
		}
		if (!$is_update_action){
			$SV[] = $new_SV;
		}
		$_SESSION['SV'] = $SV;
		return $SV;
	}
	$SV = getAllStudents();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		a{
			text-decoration: none;
			color: inherit;
		}
		a:hover{
			text-decoration: none;
			color: inherit;
		}
		a:focus{
			text-decoration: none;
			color: inherit;
		}
	</style>
</head>
<body>
	<div class="container">
		<legend class="text-center">DANH SÁCH NGƯỜI DÙNG</legend>
		<button class="btn btn-primary"><a href="add.php">Thêm mới</a></button>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Mã sinh viên</th>
					<th scope="col">Họ tên</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			$i =1;
			foreach ($SV as $item){ ?>
			<tr>
				<th scope="row"><?php echo $i; $i++; ?></th>
				<td><?= $item['mSV'] ?></td>
				<td>
					<?= $item['hoTen'] ?>
				</td>
				<td>
					<form method="POST" action="delete.php">
						<input type="hidden" value="<?= $item['mSV']; ?>" name="mSV"/>
						<button class="btn btn-info"><a href="detail.php?id=<?= $item['mSV']; ?>">Detail</a></button>
						<button class="btn btn-success"><a href="add.php?id=<?= $item['mSV']; ?>">Sửa</a></button>
						<input onclick="return confirm('Xác nhận xóa?');" type="submit" value="Delete" class="btn btn-danger" name="delete"/>
					</form>
				</td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>