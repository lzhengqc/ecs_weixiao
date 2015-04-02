<?php
namespace Weixin\Controller;
use Think\Controller;
class IndexController extends Controller {
	/**
	 * 响应微信请求
	 *
	 */
    public function index(){
    	$signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];              
        $token = C('TOKEN');
        //var_dump($token);exit;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );   
        if( $tmpStr == $signature ){
            echo $_GET['echostr'];
        }else{
            echo '123';
        }
    }
    /* 授权跳转页面 */
    public function jump(){
      $destination = I('get.destination','','htmlspecialchars');
      switch ($destination) {
        case 'buyer':
          $jumpUrl = U('Seller/Index/index','','',TRUE);
          break;
        case 'seller':
          $jumpUrl = U('Buyer/Index/index','','',TRUE);
          break;
        case 'order':
          $jumpUrl = U('Seller/Order/index','','',TRUE);
          break;
        case 'sale':
          $jumpUrl = U('Seller/Income/sale','','',TRUE);
          break;
        case 'recommend':
          $jumpUrl = U('Seller/User/recommend','','',TRUE);
          break;
        case 'income':
          $jumpUrl = U('Seller/Income/sale','','',TRUE);
          break;
        case 'teach':
          $jumpUrl = U('Buyer/Index/teach','','',TRUE);
          break;
        default:
          echo 'Parameter Error';
          return ;
          break;
      }
      $appid = C('APPID');
      $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=".$jumpUrl."&response_type=code&scope=snsapi_base&state=1#wechat_redirect";
      header("location:$url");
    }
    /**
     * 设置微信菜单
     *
     */
    public function setMenu(){
        /*获取access_token*/
        $access_token = getAccessToken();
        $url_seller = U('Weixin/Index/jump?destination=seller','','',TRUE);
        $url_buyer = U('Weixin/Index/jump?destination=buyer','','',TRUE);
        $url_order = U('Weixin/Index/jump?destination=order','','',TRUE);
        $url_income = U('Weixin/Index/jump?destination=income','','',TRUE);
        $url_sale = U('Weixin/Index/jump?destination=sale','','',TRUE);
        $url_agent = U('Weixin/Index/jump?destination=agent','','',TRUE);
        $url_teach = U('Weixin/Index/jump?destination=teach','','',TRUE);
        $menu = '{
          "button":[
          {
               "name":"我要开店",
               "sub_button":[
                {
                   "type":"view",
                   "name":"开店指导",
                   "url":"'.$url_teach.'"
                },
                {
                   "type":"view",
                   "name":"我的微店",
                   "url":"'.$url_buyer.'"
                },
                {
                   "type":"view",
                   "name":"注册与编辑",
                   "url":"'.$url_seller.'"
                }]
          
    
           }],
          "button":[
          {
               "name":"我",
               "sub_button":[
                {
                   "type":"view",
                   "name":"我的代理",
                   "url":"'.$url_agent.'"
                },
                {
                   "type":"click",
                   "name":"我的维权",
                   "key":"天气北京"
                },
                {
                   "type":"view",
                   "name":"我的收入",
                   "url":"'.$url_income.'"
                },
                {
                   "type":"view",
                   "name":"销售管理",
                   "url":"'.$url_sale.'"
                },
                {
                   "type":"view",
                   "name":"订单管理",
                   "url":"'.$url_order.'"
                }]
          
    
           }],
          "button":[
          {
               "name":"平台中心",
               "sub_button":[
                {
                   "type":"click",
                   "name":"平台优势",
                   "key":"天气北京"
                },
                {
                   "type":"click",
                   "name":"平台理念",
                   "key":"天气上海"
                }]
          
    
           }],
           
        }';
        $url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$access_token;
        $result = httpsRequest($url, $menu);  
        var_dump($result);
    }
}