<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
	protected $_validate = array(
		array('username','require','用户名不能为空',0),
		array('username','','用户名已存在','0','unique',1),
		array('username','/^1[34578]\d{9}$/','用户名必须是手机号码，长度为11位',0,'regex',1),
		array('password','require','密码不能为空',0),
		array('password','/^[A-Za-z_]\w{5,19}$/','密码必须以字母或下划线开头，长度为6~20！',0,'regex',1),
		array('repassword','require','重复密码不能为空',0),
		array('repassword','password','密码不一致！',0,'confirm'),
		array('code','require','验证码不能为空',0),
	);	
}