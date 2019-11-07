<?php 
	/**
	 * 
	 */
	class PostController
	{
		function __construct()
		{
		}
		function list(){
			require_once 'models/Post.php';
			$models_obj = new Post();
			$posts = $models_obj->getAll();
			require_once 'views/post/list.php';
		}
		function add(){
			require_once 'views/post/add.php';
		}
		function edit(){
			echo "<br> >>> SỬA";
		}
		function error(){
			echo "<br> >>> ACT 404";
		}
	}
 ?>