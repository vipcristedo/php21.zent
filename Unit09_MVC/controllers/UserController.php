<?php 
	/**
	 * 
	 */
	class UserController
	{
		function __construct()
		{
		}
		function list(){
			require_once 'models/User.php';
			$models_obj = new User();
			$users = $models_obj->getAll();
			require_once 'views/user/list.php';
		}
		function add(){
			require_once 'views/user/add.php';
		}
		function edit(){
			echo "<br> >>> SỬA";
		}

		function detail(){
			$id=$_GET["id"];
			require_once 'models/User.php';
			$models_obj = new User();
			$user_mini = $models_obj->find($id);
			require_once 'views/user/detail.php';
		}
		function error(){
			echo "<br> >>> ACT 404";
		}
	}
 ?>