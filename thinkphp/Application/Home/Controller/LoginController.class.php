<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
		//用户登录
        $this->display();
		if(IS_POST){
			$username = I('post.username');
			$pwd = I('post.password');
			$userObj = M('user');
			$where['username'] = $username;
			$temp_pwd = $userObj->where($where)->getField('password');
			if($temp_pwd==md5($pwd)){
				$_SESSION['username'] = $username;
				echo "<script>alert('恭喜您登录成功！');location.href='".__MODULE__."/Index/index'</script>";
			}else{
				echo "<script>alert('对不起，您输入的用户名或密码有误，请重试！');history.back();</script>";
			}
			die;
		}
    }
	public function register() {
		//用户注册
		$this->display();
		if(IS_POST){
			$userObj = D("user");
			if($data = $userObj->create(I('post.','','htmlspecialchars,trim'))){
				$code = I('post.code');
				$verify = new \Think\Verify();
				if($verify->check($code)){//验证码正确
					$data["password"]=md5($_POST["password"]);
					$data["regTime"]=date("Y-m-d H:i:s");
					$rows = $userObj->add($data);
					if($rows){
						echo "<script>alert('恭喜您注册成功！');location.href='".__MODULE__."/Index/index'</script>";
					}else{
						echo "<script>alert('对不起，注册失败，请重试！');history.back();</script>";
					}
				}else{
					//验证码错误
					echo "<script>alert('验证码输入错误！');</script>";	
				}
			}else{
				echo"<script>alert('".$userObj->getError()."')</script>";	
				die();
			}
		}		
	}
	public function logout() {
		//注销登录
		session_unset("username");//反注册
		session_unset();//释放所有Session变量
		session_destroy();//销毁session
		echo "<script language='javascript'>alert('退出成功！');
		location.href='".__MODULE__."/Index/index';</script>";	
	}
}