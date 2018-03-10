<?php
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model {
	protected $_validate = array(
		array('adminname','require','账号不能为空',0),
		array('adminname','','账号已存在','0','unique',1),
		array('adminname','/^[A-Za-z_]\w{4,19}$/','用户名以字母或下划线开头，长度为5~20',0,'regex',1),
		array('adminPassword','require','密码不能为空'),
		array('adminPassword','/^\d{6}$/','密码的长度必须为6位数字',0,'regex',1),
		array('realName','require','真实姓名不能为空',0),
		array('phone','require','联系方式不能为空',0),
	);	
}