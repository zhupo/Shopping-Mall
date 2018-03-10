<?php
namespace Home\Controller;
use Think\Controller;
class CartController extends CommentController {
	public function shoppcar() {
		$shopObj = M('shopcar');
		$data = array(
			'productId' => I('get.id',0,'int'),
			'productNum' => 1,
			'addTime' => date("Y-m-d H:i:s"),
			'addUser' => $_SESSION['username'],
		);
		/*$temp=$shopObj->where("productId=".$data['productId']." and addUser=".$data['addUser']."")->field('Id')->find();
		print_r($temp);
		if($temp) {
			$productNum +=$temp['productNum'];
			$ret=$this->where('Id='.$temp['Id'].'')->save(array('productNum'=>$productNum));
			if($ret) {
				echo "<script>alert('加入购物车+1！');location.href='".__MODULE__."/product/sp_list'</script>";		
			}else{
				echo "<script>alert('加入失败！');history.back();</script>";		
			}	
		}else{*/
			$rows=$shopObj->add($data);
			if($rows) {
				echo "<script>alert('加入购物车成功！');location.href='".__MODULE__."/Cart/sp_list'</script>";		
			}else{
				echo "<script>alert('加入失败！');history.back();</script>";		
			}					
	}
	public function sp_list() {
		$listObj = D('shopcar');
		$data=$listObj->shpclist();	
		$this->assign('data',$data);
		$this->display("shoppcar");	
	}	
}