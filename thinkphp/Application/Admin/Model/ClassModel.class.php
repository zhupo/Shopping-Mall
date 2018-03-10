<?php
namespace Admin\Model;
use Think\Model;
class ClassModel extends Model {
	protected $_validate = array(
		array('className','require','分类标题不能为空',0),
		array('className','','对不起，分类已存在','0','unique',1),
	);
	/*public 	function getlist() {
		$sql="select * from ";	
	}*/
}