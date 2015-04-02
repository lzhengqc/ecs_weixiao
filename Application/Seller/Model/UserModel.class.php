<?php
namespace Seller\Model;
use Think\Model;
class UserModel extends Model{
	protected $tableName = 'user';

	/**
	 * 获取指定uid用户的信息
	 * @param $condition 查询条件
	 *
	 */
	public function getUser($condition){
		return $this->where($condition)->find();
	}
}

?>