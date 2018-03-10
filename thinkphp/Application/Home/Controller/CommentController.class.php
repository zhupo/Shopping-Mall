<?php
namespace Home\Controller;
use Think\Controller;

class CommentController extends Controller {
	//公共类
	function __construct(){
		parent::__construct();
		$this->checkLogin();
	}
	private function checkLogin(){
		if(!session('?username')){
			$this->redirect('Login/login');
		}
	}
}