<?php
namespace Seller\Model;
use Think\Model;
class GoodsCategoryModel extends Model{
	protected $tableName = 'goods_category';

	/**
	 * 获取指定uid用户的自定义分类信息
	 * @param $uid 用户id
	 * @param $ifShow 是否显示
	 */
	public function getCategory($uid,$ifShow = ''){
		$condition = array(
			'uid'=>$uid
		);
		if($ifShow!==''){
			$condtion['if_show'] = $ifShow;
		}
		return $this->where($condition)->select();
	}
}

?>