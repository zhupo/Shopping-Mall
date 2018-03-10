<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends CommentController {
    public function product_list(){
		if(isset($_GET['p'])){
			$keywords = $_SESSION['keywords'];
		}else{
			$keywords = "";
			$_SESSION['keywords'] = "";
		}
		if(IS_POST){
			$keywords = I("post.keywords");
			$_SESSION['keywords'] = $keywords;
			$_GET['p'] = 1;
		}
		//实例化对象
		$userObj = M("product");
		//查询满足要求的总记录数
		$where = array(
			'title|classId' => array('like','%'.$keywords.'%'),
		);
		//查询满足要求的总记录数
		$count = $userObj->where($where)->count();
		//实例化分页类，传入总记录数和每页显示的记录数(5)
		$Page = new \Think\Page($count,3);
		//保持查询参数
		foreach($where as $key=>$val) {
			$Page->parameter[$key] = urlencode($val);
		}
		//分页显示输出
		$show = $Page->show();
		//进行分页数据查询，注意limit方法的参数要使用Page类的属性
		$data = $userObj->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
		//赋值数据集
		$this->assign('data',$data);
		//赋值分页输出
		$this->assign('page',$show);
		$this->assign('keywords',$keywords);
		$this->display();
    }
	public function product_add(){
		$classObj = M("class");
		$arr = $classObj->select();
		$this->assign("arr",$arr);
		$this->display();
		if(IS_POST){
			$this->addAction();
			return;
		}
    }
	//添加商品-处理表单
	private function addAction(){
		//添加商品
		$gid = $this->create('product','add');
		if($gid===false){
			$this->error("添加商品失败");
		}
		//保存上传文件
		if(!empty($_FILES['thumb']['name'])){
			$rst = D('product')->uploadThumb($gid);
			if($rst!==true){
				$this->error($rst,U('Product/product_list'));
			}
		}
		echo "<script>alert('恭喜您添加成功！');location.href='".__MODULE__."/Product/product_list'</script>";
	}
	//修改商品-显示页面
	public function product_update() {
		$classObj = M("class");
		$arr = $classObj->select();
		$this->assign("arr",$arr);
		//获得请求参数
		$id = I('get.id',0,'int');
		//处理表单
		if (IS_POST){
			$this->reviseAction($id);
			return;
		}
		//获取商品信息
		$data = D('product')->where("Id=$id")->find();
		//视图
		$this->assign('data',$data);
		$this->display();
	}
	//修改商品-处理表单
	private function reviseAction($id){
		$cid = I('post.classId',0,'int');
		//修改商品基本信息
		$rst = $this->create('product','save',2,array("Id=$id"));
		if($rst===false){
			$this->error("修改商品失败");
		}
		//保存上传文件
		if(!empty($_FILES['thumb']['name'])){
			$rst = D('product')->uploadThumb($id);
			if($rst!==true){
				$this->error($rst,U('Goods/revise',"Id=$id&classId=$classId"));
			}
		}
		//跳转
		echo "<script>alert('恭喜您修改成功！');location.href='".__MODULE__."/Product/product_list'</script>";
	}
	//删除商品
	public function product_del() {
		//获得请求参数
		$id = I('get.id',0,'int');
		//操作数据
		$rst = M('product')->where("Id=$id")->delete();
		if($rst===false){
			echo "<script>alert('商品删除失败！');history.back();</script>";
		}
		echo "<script>alert('商品删除成功！');location.href='".__MODULE__."/Product/product_list'</script>";	
	}
	public function product_delmore() {
		$userObj = D('product');
		$where = array();		
	}
}