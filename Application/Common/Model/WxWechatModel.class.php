<?php
namespace Common\Model;
use Think\Model;
class WxWechatModel extends Model{
	protected $connection = 'WEIXIAO';
	protected $tableName = 'wechat';
	protected $tablePrefix  = '';
	public function __construct(){
		$this->tablePrefix = C('WEIXIAO.DB_PREFIX');
		parent::__construct();
	}
	/**
	 * 获取用户微信信息
	 * @param $openid 用户openid
	 *
	 */
	public function getWechat($openid){
		return $this->where('openid='.$openid)->find();
	}
}