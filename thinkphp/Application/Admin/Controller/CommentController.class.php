<?php
namespace Admin\Controller;
use Think\Controller;

class CommentController extends Controller {
	//公共类
	function __construct(){
		parent::__construct();
		$this->checkLogin();
	}
	private function checkLogin(){
		if(!session('?adminname')){
			$this->redirect('Login/login');
		}
	}
	
	/**
	 * 公共数据创建方法
	 * @param string $tablename 表名
	 * @param string $func 操作方法
	 * @param int $type 验证时机（1=添加 2=修改）
	 * @param string/array $where 查询条件
	 * @return mixed 操作结果
	 */
	protected function create($tablename,$func,$type=1,$where=array()){
		$Model = D($tablename);
		if(!$Model->create(I('post.'),$type)){
			$this->error($Model->getError());
		}
		if(empty($where)){
			return $Model->$func();
		}
		return $Model->where($where)->$func();
	}
}