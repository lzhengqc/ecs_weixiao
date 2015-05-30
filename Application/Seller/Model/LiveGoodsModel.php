<?php
namespace Seller\Model;
use Think\Model;
class GoodsModel extends Model{
	protected $connection = 'ECSHOP';	
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