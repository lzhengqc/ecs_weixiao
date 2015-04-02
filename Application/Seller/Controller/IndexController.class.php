<?php
namespace Seller\Controller;
use Think\Controller;
class IndexController extends Controller {
    /* 初始化用户微信信息 */
    private $merchantWechat = '';
    private $merchantUser = '';
    /**
     * 构造函数
     * 
     *
     */
    public function __construct(){
        $wechatModel = D('Weixin/Wechat');
        $userModel = D('Seller/User');
        /* 微信入口进来，从微信获取用户信息 */
        if(isset($_GET['code'])){
            $AccessToken = getAccessToken();
            $appid = C('APPID');
            $secret = C('APPSECRET');
            $msg = file_get_contents('https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$secret.'&code='.$code.'&grant_type=authorization_code');
            $merchantOpenid = json_decode($msg,true);
            /* 通过openid从数据库获取用户的微信信息 */
            $merchantWechat = $wechatModel->getWechat($merchantOpenid['openid']);
            if(!$merchantWechat){
                /* 如果本地数据库中不存在，则从微信服务器获取 */
                $requestUrl = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$accessToken.'&openid='.$merchantOpenid.'&lang=zh_CN';
                $getMerchantWechat = file_get_contents($requestUrl);
                $merchantWechat = json_decode($getMerchantWechat,true);   
            }
            /* 如果数据库中获取失败，同时也不能从微信服务器获取用户信息，提示失败 */
            if(!$merchantWechat){
                die('Param fail');
            }

            /* 把商户微信个人资料存入session */
            session('merchantWechat',$merchantWechat);
        }

        /* 测试数据start：模拟登陆 */
        $testStr = '{
            "subscribe": 1, 
            "openid": "oaQ8auGYY-uQTtIUAFFxqnQJpjWQ", 
            "nickname": "Jahng", 
            "sex": 1, 
            "language": "zh_CN", 
            "city": "广州", 
            "province": "广东", 
            "country": "中国", 
            "headimgurl": "http://wx.qlogo.cn/mmopen/w9h84ibs6ic2cwVYeJTqmRtNpkhXTqYMrAGA5mAW6d5rPQ4qHvDuSkaTlrWEEf1v8icFFOrITC8MRvBrKz3Es35PzqpO7zic10CD/0", 
            "subscribe_time": 1426411696, 
            "remark": ""
        }';
        $merchantWechat = json_decode($testStr,true);
        session('merchantWechat',$merchantWechat);
        /* 测试数据end */

        /* 如果没有商户微信信息，访问失败 */
        if(!session('merchantWechat')){
            die('Param fail');
        }
        /* 获取用户的微信个人信息 */
        $this->merchantWechat = session('merchantWechat');
        /* 获取用户微销平台个人信息 */
        $this->merchantUser = $userModel->getUser(array('openid'=>$this->merchantWechat['openid']));
        
    }



	/**
	 * 本地商品分类
	 *
	 */
    public function index(){
        /* 获取当前微信用户的自定义商品分类 */  
        $goodsCategoryModel = D('Seller/GoodsCategory');
        $localCategoryList = $goodsCategoryModel->getCategory($this->merchantUser['uid'],'');
        $data = array(
            'localCategoryList'=>$localCategoryList
        );
        $this->assign($data);
    	$this->display('category');
    }
    /**
	 * 本地分类商品列表
	 *
	 */
    public function localGoodsList(){
    	$this->display('local_goods_list');
    }
    /**
	 * 线上商品分类
	 *
	 */
    public function liveCategory(){
    	$this->display('live_category');
    }
    /**
	 * 线上分类商品列表
	 *
	 */
    public function liveGoodsList(){
    	$this->display('live_goods_list');
    }
    /**
	 * 线上商品详细
	 *
	 */
    public function goodsDetail(){
    	$this->display('goods_detail');
    }
}