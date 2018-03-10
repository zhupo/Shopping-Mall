<?php

namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller {
    public function login(){
		$this->display("login");
		if(IS_POST){
            //验证码正确
            $adminname = $_POST['adminname'];
            $pwd = $_POST['adminPassword'];
            $userObj = M('admin');
            $where['adminname'] = $adminname;
            $temp_pwd = $userObj->where($where)->getField('adminPassword');
            if($temp_pwd==md5($pwd)){
                $_SESSION['adminname'] = $adminname;
                echo "<script>alert('恭喜您登录成功！');location.href='".__MODULE__."/Admin/admin_list'</script>";
            }else{
                echo "<script>alert('对不起，您输入的用户名或密码有误，请重试！');history.back();</script>";
            }
		}
    }
	public function logout() {
		//注销登录
		session_unset("adminname");//反注册
		session_unset();//释放所有Session变量
		session_destroy();//销毁session
		echo "<script language='javascript'>alert('退出成功！');
		location.href='".__MODULE__."/Login/login';</script>";	
	}
}