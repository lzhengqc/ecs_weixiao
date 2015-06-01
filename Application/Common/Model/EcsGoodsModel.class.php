<?php
namespace Common\Model;
use Think\Model;
class EcsGoodsModel extends Model{
	protected $connection = 'ECSHOP';
	protected $tableName = 'goods';
	protected $tablePrefix  = '';
	public function __construct(){
		$this->tablePrefix = C('ECSHOP.DB_PREFIX');
		parent::__construct();
	}
	/**
	 * 
	 * @param $condition 查询条件
	 *
	 */
	public function getList(){
		return $this->where()->find();
	}
}

?>