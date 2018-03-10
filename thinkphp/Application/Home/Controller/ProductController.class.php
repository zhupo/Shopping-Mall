<?php
namespace Home\Controller;
use Think\Controller;
class ProductController extends Controller {
	public function lanmu() {
		$this->display();		
	}
	public function product_list() {
		$proObj = M('product');
		$id=$_GET['id'];
		$where = array('classId' =>$id);
		//查询满足要求的总记录数
		$count = $proObj->where($where)->count();
		//实例化分页类，传入总记录数和每页显示的记录数(5)
		$Page = new \Think\Page($count,4);
		//分页显示输出
		$show = $Page->show();
		//进行分页数据查询，注意limit方法的参数要使用Page类的属性
		$data = $proObj->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
		//获取分类名
		$arr=M('class')->where("Id=$id")->find();
		$this->assign('arr',$arr);
		//赋值数据集
		$this->assign('data',$data);
		//赋值分页输出
		$this->assign('page',$show);
		$this->display();		
	}	
	
	public function details() {
		$proObj = M('product');
		$id=$_GET['id'];
		$where = array('Id' =>$id);
		$data=M('product')->where("Id=$id")->find();
		$classId =M('product')->where($where)->getField('classId');
		//取出商品分类信息
		$arr = D('class')->getPidList($classId);
		$this->assign('arr',$arr);
		$this->assign('data',$data);
		$this->display();	
	}
}