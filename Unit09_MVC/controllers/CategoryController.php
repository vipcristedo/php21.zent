<?php 
	/**
	 * 
	 */
	require_once 'models/Category.php';
	class CategoryController
	{
		var $models_obj;
		function __construct()
		{
			$this->models_obj = new Category();
		}
		function list(){
			$categories = $this->models_obj->getAll();
			require_once 'views/category/list.php';
		}
		//
		function detail(){
			$id=$_GET["id"];
			$category_mini = $this->models_obj->find($id);
			require_once 'views/category/detail.php';
		}
		//
		function add(){
			$categories=$this->models_obj->getAll();
			require_once 'views/category/add.php';
		}
		function store(){
			$data =$_POST;
			$status = $this->models_obj->create($data);
			if($status){
				setcookie('msg','thêm mới thành công',time()+5);
			}else{
				setcookie('msg','thêm mới thất bại',time()+5);
			}
			header('Location: index.php?mod=category&act=list');
		}
		function edit(){
			$id=$_GET["id"];
			$category_mini = $this->models_obj->find($id);
			require_once ('views/category/edit.php');
		}
		function update(){
			$data =$_POST;
			$status = $this->models_obj->update($data);
			if($status==true){
				setcookie('msg','Update thành công',time()+5);
			}else{
				setcookie('msg','Update thất bại',time()+5);
			}
			header('Location: index.php?mod=category&act=list');
		}
		function delete(){
			$id=$_GET["id"];
			$category_mini = $this->models_obj->delete($id);
			header('Location: index.php?mod=category&act=list');
		}
		function error(){
			echo "<br> >>> ACT 404";
		}
	}
 ?>