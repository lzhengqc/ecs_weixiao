<?php
namespace Common\Model;
use Think\Model;
class WxUserModel extends Model{
	protected $connection = 'WEIXIAO';
	protected $tableName = 'user';
	protected $tablePrefix  = '';
	
	public function __construct(){
		$this->tablePrefix = C('WEIXIAO.DB_PREFIX');
		parent::__construct();
	}

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