<?php 
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$mod = isset($_GET['mod'])?$_GET['mod']:'';
	$act = isset($_GET['act'])?$_GET['act']:'list';
	switch ($mod) {
		case 'category':
			require_once 'controllers/CategoryController.php';
			$category_obj = new CategoryController();
			switch ($act) {
				case 'list':
					$category_obj->list();
					break;
				case 'detail':
					$category_obj->detail();
					break;
				case 'add':
					$category_obj->add();
					break;
				case 'store':
					$category_obj->store();
					break;
				case 'edit':
					$category_obj->edit();
					break;
				case 'update':
					$category_obj->update();
					break;
				case 'delete':
					$category_obj->delete();
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
				case 'detail':
					$post_obj->detail();
					break;
				case 'add':
					$post_obj->add();
					break;
				case 'store':
					$post_obj->store();
					break;
				case 'edit':
					$post_obj->edit();
					break;
				case 'update':
					$post_obj->update();
					break;
				case 'delete':
					$post_obj->delete();
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
				case 'detail':
					$user_obj->detail();
					break;
				case 'add':
					$user_obj->add();
					break;
				case 'store':
					$user_obj->store();
					break;
				case 'edit':
					$user_obj->edit();
					break;
				case 'update':
					$user_obj->update();
					break;
				case 'delete':
					$user_obj->delete();
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