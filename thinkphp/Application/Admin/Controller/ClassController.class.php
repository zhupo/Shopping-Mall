<?php
namespace Admin\Controller;
use Think\Controller;
class ClassController extends CommentController {
    public function class_list(){
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
		$userObj = M("class");
		//查询满足要求的总记录数
		$where = array(
			'className' => array('like','%'.$keywords.'%'),
		);
		//查询满足要求的总记录数
		$count = $userObj->where($where)->count();
		//实例化分页类，传入总记录数和每页显示的记录数(5)
		$Page = new \Think\Page($count,4);
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
	public function class_add(){
		$adminObj = D("class");
		$arr = $adminObj->select();
		$this->assign("arr",$arr);
		$this->display();
		if(IS_POST){
			$userObj = D("class");
			if($data = $userObj->create(I('post.','','htmlspecialchars,trim'))){
				$data["addTime"]=date("Y-m-d H:i:s");
				$data["addUser"]=$_SESSION["adminname"];
				$rows = $userObj->add($data);
				if($rows){
					echo "<script>alert('添加分类成功！');location.href='class_list'</script>";
				}else{
					echo "<script>alert('对不起，添加分类失败，请重试！');history.back();</script>";
				}
			}else{
				echo"<script>alert('".$userObj->getError()."')</script>";	
				die();
			}
		}
    }
	public function class_del() {
		$userObj = D('class');
		$where = array('Id' => $_GET['id']);
		$rows = $userObj->where($where)->delete();
		if($rows){
			echo "<script>alert('分类删除成功！');location.href='".__MODULE__."/Class/class_list'</script>";	
		}else{
			$this->error("分类删除失败！");
		}	
	}
	public function class_update(){
		$userObj = D('class');
		$arr = $userObj->select();
		$this->assign("arr",$arr);
		$where=array('Id' => $_GET['id']);
		$data = $userObj->where($where)->find();
		$this->assign('data',$data);
		$this->display();
		if(IS_POST){
			if($data = $userObj->create(I('post.','','htmlspecialchars,trim'))){
				$data["addTime"]=date("Y-m-d H:i:s");
				$data["addUser"]=$_SESSION["adminname"];	
				$rows = $userObj->where($where)->save($data);
				if($rows){
					echo "<script>alert('分类修改成功！');location.href='".__MODULE__."/Class/class_list'</script>";
				}else{
					$this->error("分类修改失败！");
				}
			}else{
				echo"<script>alert('".$userObj->getError()."')</script>";	
				die();		
			}
		}
    }
	public function class_delmore() {
		$userObj = D('class');
		$where = array();		
	}
}