<?php
namespace Common\Model;
use Think\Model;
class WxGoodsModel extends Model{
	protected $connection = 'WEIXIAO';
	protected $tableName = 'goods';
	protected $tablePrefix  = '';
	
	public function __construct(){
		$this->tablePrefix = C('WEIXIAO.DB_PREFIX');
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