<?php 
	$mod = isset($_GET['mod'])?$_GET['mod']:'';
	$act = isset($_GET['act'])?$_GET['act']:'';
	switch ($mod) {
		case 'category':
			require_once 'controllers/CategoryController.php';
			$category_obj = new CategoryController();
			switch ($act) {
				case 'list':
					$category_obj->list();
					break;
				case 'add':
					$category_obj->add();
					break;
				case 'edit':
					$category_obj->edit();
					break;
				default:
					$category_obj->error();
					break;
			}
			break;
		case 'post':
			require_once 'controllers/PostController.php';
			$post_obj = new PostController();
			switch ($act) {
				case 'list':
					$post_obj->list();
					break;
				case 'add':
					$post_obj->add();
					break;
				case 'edit':
					$post_obj->edit();
					break;
				default:
					$post_obj->error();
					break;
			}
			break;
		case 'user':
			require_once 'controllers/UserController.php';
			$user_obj = new UserController();
			switch ($act) {
				case 'list':
					$user_obj->list();
					break;
				case 'add':
					$user_obj->add();
					break;
				case 'detail':
					$user_obj->detail();
					break;
				case 'edit':
					$user_obj->edit();
					break;
				default:
					$user_obj->error();
					break;
			}
			break;
		default:
			echo "index";
			break;
	}
 ?>