<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		//布局
		$buju = M('buju');
		$data =$buju->select();
		$this->assign('data',$data);
		//获得分类列表
		$arr = D('class')->getList();
		$this->assign('arr',$arr);
        $this->display();
    }
}