<?php
namespace Home\Model;
use Think\Model;
class shopcarModel extends Model {
	public function shpclist() {
		$sql="select * from nc_shopcar s join nc_product p on s.productId=p.Id  where s.addUser='".$_SESSION['username']."'";
		return $data=$this->query($sql);	
	}		
}