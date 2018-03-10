<?php
namespace Admin\Model;
use Think\Model;
class ProductModel extends Model {
	protected $_validate = array(
		array('classId','require','未选择分类',0,'',1),
		array('title','require','商品名不能为空',1,'',3),
		array('price','require','商品价格不能为空',1,'',3),
		array('specification','require','商品规格不能为空',1,'',3),
		array('stocks','require','商品库存量不能为空',1,'',3),
		array('price','/^[\d]+$/','商品价格只能是数字',1,'',3),
		array('stocks','/^[\d]+$/','商品库存只能是数字',1,'',3),
		array('title','','该商品已经存在',1,'unique',1),
	);
	/**
	 * 获得商品列表
	 * @param array $field 查询字段
	 * @param array $where 查询条件
	 * @param array $order 排序条件
	 * @return array 数据
	 */
	public function getList($field,$where,$order){
		//准备查询条件
		if($where['cid']<=0){
			unset($where['cid']);
		}
		//查询数据
		$count = $this->where($where)->count();
		$Page = new \Think\Page($count,5);
		$limit = $Page->firstRow.','.$Page->listRows;
		//取得数据
		$data['page'] = $Page->show();
		$data['list'] = $this->field($field)->where($where)->order($order)->limit($limit)->select();
		return $data;
	}
	/**
	 * 上传文件
	 * @param $gid int 商品ID
	 * @return string 错误信息（成功返回true）
	 */
	public function uploadThumb($gid){
		//准备上传目录
		$file['temp'] = './Public/uploads/temp/';
		file_exists($file['temp']) or mkdir($file['temp'],0777,true);
		//上传文件
		$Upload = new \Think\Upload(array(
			'exts' => array('jpg','png','jpeg'),
			'rootPath' => $file['temp'],
			'autoSub' => false,
		));
		$rst = $Upload->upload();
		if($rst===false){
			return $Upload->getError();
		}
		//生成文件信息
		$file['name'] = $rst['thumb']['savename'];
		$file['save'] = date('Y-m/d/');
		$file['path1'] = './Public/uploads/'.$file['save'];
		$file['path2'] = './Public/uploads/thumb/'.$file['save'];
		//创建保存目录
		file_exists($file['path1']) or mkdir($file['path1'],0777,true);
		file_exists($file['path2']) or mkdir($file['path2'],0777,true);
		//生成缩略图
		$Image = new \Think\Image(); 
		$Image->open($file['temp'].$file['name']);
		$Image->thumb(350,300,2)->save($file['path1'].$file['name']);//大图
		$Image->open($file['temp'].$file['name']);
		$Image->thumb(176,120,2)->save($file['path2'].$file['name']);//小图
		//删除临时文件
		unlink($file['temp'].$file['name']);
		//删除原来的图片文件
		$this->delImage($gid);
		//保存缩略图
		$this->where("Id=$gid")->save(array(
			'thumb'=> $file['save'].$file['name'],
		));
		return true;
	}
	/**
	 * 删除商品关联图片文件
	 * @param type $gid
	 * @param type $file
	 */
	private function delImage($gid=0,$file=''){
		$path = './Public/uploads/';
		if($file==''){
			$file = $this->where("Id=$gid")->getField('thumb');
		}
		if($file && strlen(trim($file))>4){
			//删除文件（空目录仍然存在，需要用其他办法清理空目录）
			unlink($path.$file);
			unlink($path.'thumb/'.$file);
		}
	}
	/**
	 * 删除商品及关联的文件
	 */
	public function delAll($gid){
		//删除商品图片删除
		$this->delImage($gid);
		//删除商品
		return $this->where("gid=$gid")->delete();
	}
	/**
	 * 按照cid删除商品及关联的文件、属性
	 */
	public function delAllByCid($cid){
		$data = $this->field('thumb,gid')->where("cid=$cid")->select();
		if($data == null){
			return true;
		}
		foreach($data as $v){
			$gids[] = $v['gid'];
			$this->delImage(0,$v['thumb']);//删除图片文件
		}
		if(!empty($gids)){
			M('goodsAttr')->where(array(
				'gid'=>array('in',implode(',',$gids))
			))->delete();
		}
		return $this->where("cid=$cid")->delete();
	}
}
