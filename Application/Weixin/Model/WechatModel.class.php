<?php
namespace Weixin\Model;
use Think\Model;
class WechatModel extends Model{
	protected $tableName = 'wechat';
	/**
	 * 获取用户微信信息
	 * @param $openid 用户openid
	 *
	 */
	public function getWechat($openid){
		return $this->where('openid='.$openid)->find();
	}
}