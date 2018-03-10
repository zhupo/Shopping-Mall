<?php
namespace Admin\Controller;
use Think\Controller;
class JibenController extends CommentController {
	public function pass() {
		$this->display();	
		if(IS_POST){
			$userObj=M('admin');
			$data = $userObj->create();
			$data['adminpassword']=md5($_POST['adminpassword']);
			$where['adminname'] = $_SESSION['adminname'];
			$temp_pwd = $userObj->where($where)->getField('adminPassword');
			if($data['adminpassword']==$temp_pwd) {
				$rows = $userObj->where($where)->save($data);
				if($rows){
					echo "<script>alert('密码修改成功！');location.href='".__MODULE__."/Admin/admin_list'</script>";
				}else{
					echo "<script>alert('密码修改失败！');history.back();</script>";
				}		
			}						
		}	
	}	
}