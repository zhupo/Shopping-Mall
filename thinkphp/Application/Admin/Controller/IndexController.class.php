<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommentController {
    public function index(){
		$this->display("index");
    }
}