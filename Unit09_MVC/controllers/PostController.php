<?php 
	/**
	 * 
	 */
	require_once 'models/Post.php';
	require_once 'models/Category.php';
	require_once 'models/User.php';
	class PostController
	{
		var $models_obj;
		var $category_models_obj;
		var $user_models_obj;
		function __construct()
		{
			$this->models_obj = new Post();
			$this->category_models_obj = new Category();
			$this->user_models_obj = new User();
		}
		//
		function list(){
			$posts = $this->models_obj->getAll();
			require_once 'views/post/list.php';
		}
		//
		function detail(){
			$id=$_GET["id"];
			$post_mini = $this->models_obj->find($id);
			require_once 'views/post/detail.php';
		}
		//
		function add(){
			$posts=$this->models_obj->getAll();
			$users=$this->user_models_obj->getAll();
			$categories=$this->category_models_obj->getAll();
			require_once 'views/post/add.php';
		}
		//
		function store(){
			$data=$_POST;
			$status =$this->models_obj->create($data);
			if ($status) {
				setcookie('msg','Thêm mới thành công',time()+5);
			}else{
				setcookie('msg','Thêm mới thành công',time()+5);
			}
			header('Location: index.php?mod=post&act=list');
		}
		//
		function edit(){
			$id=$_GET["id"];
			$post_mini = $this->models_obj->find($id);
			$posts=$this->models_obj->getAll();
			$users=$this->user_models_obj->getAll();
			$categories=$this->category_models_obj->getAll();
			require_once ('views/post/edit.php');
		}
		//
		function update(){
			$data =$_POST;
			$status = $this->models_obj->update($data);
			if($status==true){
				setcookie('msg','Update thành công',time()+5);
			}else{
				setcookie('msg','Update thất bại',time()+5);
			}
			header('Location: index.php?mod=post&act=list');
		}
		function delete(){
			$id=$_GET["id"];
			$post_mini = $this->models_obj->delete($id);
			header('Location: index.php?mod=post&act=list');
		}
		
		//
		function error(){
			echo "<br> >>> ACT 404";
		}
	}
 ?>