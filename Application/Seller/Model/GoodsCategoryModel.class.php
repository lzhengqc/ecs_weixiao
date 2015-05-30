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

	/**
	 * 获取分类信息
	 * @param $uid 用户id
	 * @param $goodsCategoryName 分类名 
	 *
	 */
	public function getLocalCategory($uid,$goodsCategoryName){
		$condition = array(
			'uid'=>$uid,
			'goods_category_name'=>$goodsCategoryName
		);
		return $this->where($condition)->select();
	}

	/**
	 * 添加分类信息
	 * @param $data 需要添加的数据
	 *
	 */
	public function addGoodsCategory($data){
		return $this->data($data)->add();
	}
	/**
	 * 编辑分类信息
	 * @param $categoryId 分类id
	 * @param $data 编辑的数据
	 *
	 */
	public function editGoodsCategory($categoryId,$data){
		$condition = array(
			'goods_category_id'=>$categoryId
		);
		return $this->where($condition)->save($data);
	}
	/**
	 * 通过分类id获取分类信息
	 * @param $goodsCategoryId 分类id
	 *
	 */
	public function getCategoryById($goodsCategoryId){
		$condition = array(
			'goods_category_id'=>$goodsCategoryId
		);
		return $this->where($condition)->select();
	}
	/**
	 * 删除分类信息
	 * @param $goodsCategoryId 分类id
	 *
	 */
	public function deleteGoodsCategory($goodsCategoryId){
		$condition = array(
			'goods_category_id'=>$goodsCategoryId
		);
		return $this->where($condition)->delete();
	}
}

?>