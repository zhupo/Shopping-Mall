<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends CommentController {
    public function admin_list(){
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
		$User = M('admin');
		//查询满足要求的总记录数
		$where = array(
			'adminname' => array('like','%'.$keywords.'%'),
			//'realName' => array('like','%'.$keywords.'%'),
		);
		//查询满足要求的总记录数
		$count = $User->where($where)->count();
		//实例化分页类，传入总记录数和每页显示的记录数(5)
		$Page = new \Think\Page($count,2);
		//保持查询参数
		foreach($where as $key=>$val) {
			$Page->parameter[$key] = urlencode($val);
		}
		//分页显示输出
		$show = $Page->show();
		//进行分页数据查询，注意limit方法的参数要使用Page类的属性
		$data = $User->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
		//赋值数据集
		$this->assign('data',$data);
		//赋值分页输出
		$this->assign('page',$show);
		$this->assign('keywords',$keywords);
		$this->display();
    }
	public function admin_add(){
		$this->display();
		if(IS_POST){
			$userObj = D("admin");
			if($data = $userObj->create(I('post.','','htmlspecialchars,trim'))){
				$data["adminPassword"]=md5($_POST["adminPassword"]);
				$data["addTime"]=date("Y-m-d H:i:s");
				$data["addUser"]=$_SESSION["adminname"];
				$rows = $userObj->add($data);
				if($rows){
					//$this->success("管理员添加成功！",U("admin_list"),2);
					echo "<script>alert('恭喜您添加成功！');location.href='".__MODULE__."/Admin/admin_list'</script>";
				}else{
					//$this->error("管理员添加失败！");
					echo "<script>alert('管理员添加失败！');history.back();</script>";
				}		
			}else{
				echo"<script>alert('".$userObj->getError()."')</script>";	
				die();
			}
		}
    }
	public function admin_del() {
		$userObj = M('admin');
		$where = array('Id' => $_GET['id']);
		$rows = $userObj->where($where)->delete();
		if($rows){
			echo "<script>alert('管理员删除成功！');location.href='".__MODULE__."/Admin/admin_list'</script>";	
		}else{
			$this->error("管理员删除失败！");
		}	
	}
	public function admin_update(){
		$userObj = D('admin');
		$where=array('Id' => $_GET['id']);
		$data = $userObj->where($where)->find();
		$this->assign('data',$data);
		$this->display();
		if(IS_POST){
			if($arr = $userObj->create(I('post.','','htmlspecialchars,trim'))){
				$arr["addTime"]=date("Y-m-d H:i:s");
				$arr["addUser"]=$_SESSION["adminname"];	
				$rows = $userObj->where($where)->save($arr);
				if($rows){
					echo "<script>alert('管理员修改成功！');location.href='".__MODULE__."/Admin/admin_list'</script>";
				}else{
					echo "<script>alert('管理员修改失败！');history.back();</script>";
				}		
			}else{
				echo"<script>alert('".$userObj->getError()."')</script>";	
				die();
			}	
		}
    }
	public function admin_delmore() {
		$userObj = M('admin');
		//exit("hello");
		$idArr = $_POST["ID"];
		$str = implode(",",$idArr);	
		$where=array('Id' => $str);
		//$where='Id in '.($str).'';
/*		$where = array(
			'Id' => array('in',$str),
		);*/
		$rows = $userObj->where($where)->delete();
		if($rows){
			echo "<script>alert('管理员批量删除成功！');location.href='".__MODULE__."/Admin/admin_list'</script>";	
		}else{
			echo "<script>alert('管理员批量删除失败！');history.back();</script>";
		}	
	}
}