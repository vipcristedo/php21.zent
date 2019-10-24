<?php 
if (!empty($_POST['delete']))
{
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
	$mSV = isset($_POST['mSV']) ? $_POST['mSV'] : '';
	deleteStudent($mSV);
}
header("Location: list.php");
?>