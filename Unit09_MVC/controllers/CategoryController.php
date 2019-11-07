<?php 
	/**
	 * 
	 */
	class CategoryController
	{
		function __construct()
		{
		}
		function list(){
			require_once 'models/Category.php';
			$models_obj = new Category();
			$categories = $models_obj->getAll();
			require_once 'views/category/list.php';
		}
		function add(){
			require_once 'views/category/add.php';
		}
		function edit(){
			echo "<br> >>> SỬA";
		}
		function error(){
			echo "<br> >>> ACT 404";
		}
	}
 ?>