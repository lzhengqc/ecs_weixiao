<?php
    
/**
 * 
 * 字符截取
 * @param string $string
 * @param int $start
 * @param int $length
 * @param string $charset
 * @param string $dot
 * 
 * @return string
 */
function strCut(&$string, $start, $length, $charset = "utf-8", $dot = '...') {
	if(function_exists('mb_substr')) {
		if(mb_strlen($string, $charset) > $length) {
			return mb_substr ($string, $start, $length, $charset) . $dot;
		}
		return mb_substr ($string, $start, $length, $charset);
		
	}else if(function_exists('iconv_substr')) {
		if(iconv_strlen($string, $charset) > $length) {
			return iconv_substr($string, $start, $length, $charset) . $dot;
		}
		return iconv_substr($string, $start, $length, $charset);
	}

	$charset = strtolower($charset);
	switch ($charset) {
		case "utf-8" :
			preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/", $string, $ar);
			if(func_num_args() >= 3) {
				if (count($ar[0]) > $length) {
					return join("", array_slice($ar[0], $start, $length)) . $dot;
				}
				return join("", array_slice($ar[0], $start, $length));
			} else {
				return join("", array_slice($ar[0], $start));
			}
			break;
		default:
			$start = $start * 2;
			$length   = $length * 2;
			$strlen = strlen($string);
			for ( $i = 0; $i < $strlen; $i++ ) {
				if ( $i >= $start && $i < ( $start + $length ) ) {
					if ( ord(substr($string, $i, 1)) > 129 ) $tmpstr .= substr($string, $i, 2);
					else $tmpstr .= substr($string, $i, 1);
				}
				if ( ord(substr($string, $i, 1)) > 129 ) $i++;
			}
			if ( strlen($tmpstr) < $strlen ) $tmpstr .= $dot;
			
			return $tmpstr;
	}
}

/**
 * 递归方式的对变量中的特殊字符进行转义
 *
 * @access  public
 * @param   mix     $value
 *
 * @return  mix
 */
function addslashesDeep($value)
{
    if (empty($value))
    {
        return $value;
    }
    else
    {
        return is_array($value) ? array_map('addslashes_deep', $value) : addslashes($value);
    }
}

/**
 * 获得用户的真实IP地址
 *
 * @access  public
 * @return  string
 */
function realIp()
{
    static $realip = NULL;

    if ($realip !== NULL)
    {
        return $realip;
    }

    if (isset($_SERVER))
    {
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);

            /* 取X-Forwarded-For中第一个非unknown的有效IP字符串 */
            foreach ($arr AS $ip)
            {
                $ip = trim($ip);

                if ($ip != 'unknown')
                {
                    $realip = $ip;

                    break;
                }
            }
        }
        elseif (isset($_SERVER['HTTP_CLIENT_IP']))
        {
            $realip = $_SERVER['HTTP_CLIENT_IP'];
        }
        else
        {
            if (isset($_SERVER['REMOTE_ADDR']))
            {
                $realip = $_SERVER['REMOTE_ADDR'];
            }
            else
            {
                $realip = '0.0.0.0';
            }
        }
    }
    else
    {
        if (getenv('HTTP_X_FORWARDED_FOR'))
        {
            $realip = getenv('HTTP_X_FORWARDED_FOR');
        }
        elseif (getenv('HTTP_CLIENT_IP'))
        {
            $realip = getenv('HTTP_CLIENT_IP');
        }
        else
        {
            $realip = getenv('REMOTE_ADDR');
        }
    }

    preg_match("/[\d\.]{7,15}/", $realip, $onlineip);
    $realip = !empty($onlineip[0]) ? $onlineip[0] : '0.0.0.0';

    return $realip;
}

/**
 * 获得用户的微信信息
 *
 * @access  public
 * @return  array
 */
function getWechatInfo($openid,$access_token){
    $get_user_info = file_get_contents('https://api.weixin.qq.com/cgi-bin/user/info?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN');
    $user_info = json_decode($get_user_info,true);
    return $user_info;
}

/**
 * 秒换小时
 *
 * @access  public
 * @return  array
 */

function secondToTime($time){ 
  if(is_numeric($time)){ 
    $value = array( 
      "years" => 0, "days" => 0, "hours" => 0, 
      "minutes" => 0, "seconds" => 0, 
    ); 
    if($time >= 31556926){ 
      $value["years"] = floor($time/31556926); 
      $time = ($time%31556926); 
    } 
    if($time >= 86400){ 
      $value["days"] = floor($time/86400); 
      $time = ($time%86400); 
    } 
    if($time >= 3600){ 
      $value["hours"] = floor($time/3600); 
      $time = ($time%3600); 
    } 
    if($time >= 60){ 
      $value["minutes"] = floor($time/60); 
      $time = ($time%60); 
    } 
    $value["seconds"] = floor($time); 
    return $value; 
  }else{ 
    return FALSE; 
  } 
}
/**
 * 错误提示信息
 *
 *
 */
function alert($msg='',$url=''){
    header('Content-type:text/html;charset=utf8');
    echo $url=='back'?'<script>alert("'.$msg.'");window.history.go(-1);</script>':
        '<script>alert("'.$msg.'");window.location.href="'.$url.'";</script>';
    exit;
}
/**
 * 正则验证
 *
 */
function validate($str,$type){
    switch($type){
        case 'telephone':
            $pattern = '/^(13|15|18|14)\d{9}$/';
            break;
        case 'email':
            $pattern = '/^[a-zA-Z]+[0-9a-zA-Z_]*@[a-zA-Z0-9]+\.[a-z]+$/';
            break;
        case 'url':
            $pattern = '/^(http:|https:)\/\/www\.[a-z0-9]+\.(com|cn)$/';
            break;
        case 'number':
            $pattern = '/^\d+$/';
    }
    return preg_match($pattern,$str);
}

/**
 * 生成激活码
 *
 *
 *
 */
function makeRandom(){
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $random = '';
    for ($i = 0; $i <6; $i++){
        $random .=substr($chars, mt_rand(0,strlen($chars) -1), 1);
    }
    return $random;
}

/**
 * 获取accesstoken
 *
 *
 *
 */
function getAccessToken(){
    $access_token = file_get_contents('./access_token.json');
    if(!$access_token){
        $appid = C('APPID');
        $appsecret = C('APPSECRET');
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        $jsoninfo = json_decode($output, true);
        $access_token = $jsoninfo["access_token"];
        file_put_contents('./access_token.json', $access_token);
    }
    return $access_token;
}
/**
 * 模拟post请求
 *
 */
function httpsRequest($url,$data = null){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    if (!empty($data)){
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
} 