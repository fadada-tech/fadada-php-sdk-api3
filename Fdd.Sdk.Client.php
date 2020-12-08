<?php

require_once 'Fdd.Sdk.IClient.php';

date_default_timezone_set('PRC');//其中PRC为“中华人民共和国”

class Client implements IClient{
	
	private $appId;
	private $appKey;
	private $url;
	private $timeout;
	
	public function __construct($appId, $appKey, $url, $timeout = 60){
		$this->appId = $appId;
		$this->appKey = $appKey;
		$this->url = $url;
	}

    public function request_file($token, $nonce, $userToken, $bizContent, $path, array $files){
        $headers = $this->getHeader($nonce, $bizContent, $token, $userToken);
        $postHeader = $this->toPost($headers);
        //	var_dump($postHeader);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url.$path);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->timeout);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $postHeader);
        curl_setopt($ch, CURLOPT_POST, 1);
        $body = array();
        foreach($files as $k => $v){
            $body[$k] = new \CURLFile(realpath($v));
        }
        $body["bizContent"] = $bizContent;
        curl_setopt($ch, CURLOPT_SAFE_UPLOAD, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    public function downLoad_request($token, $nonce, $userToken, $bizContent, $path){
        $headers = $this->getHeader($nonce, $bizContent, $token, $userToken);
        $headers['Content-type'] = "application/x-www-form-urlencoded";
        $postHeader = $this->toPost($headers);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url.$path);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->timeout);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $postHeader);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, true);
        $body = array();
        $body['bizContent'] = $bizContent;
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($body));
        $response = curl_exec($ch);
        $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE); //头信息size
        $header = substr($response, 0, $headerSize);
        $body = substr($response, $headerSize);
        $headerArray = explode("\r\n", $header);
        $rsp = array();
        $rsp['body'] = $body;
        foreach ($headerArray as $loop) {
            if (strpos($loop, "Content-Type") !== false) {
                $contentType = trim(substr($loop, 13));
                $rsp['contentType'] = $contentType;
            }
        }
        curl_close($ch);
        return $rsp;
    }


    public function request($token, $nonce, $userToken, $bizContent, $path){
		$headers = $this->getHeader($nonce, $bizContent, $token, $userToken);
		$headers['Content-type'] = "application/x-www-form-urlencoded";
		$postHeader = $this->toPost($headers);
	//	var_dump($postHeader);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->url.$path);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->timeout);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $postHeader);
		curl_setopt($ch, CURLOPT_POST, 1);
		if(!is_null($bizContent)){
			$body = array();
			$body['bizContent'] = $bizContent;
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($body));
		}
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	}
	
	public function toPost(array $params = array(), $pre = ''){
	    $result = array();
		foreach($params as $k => $v){
	       $result[] = $k.": ".$v;
	    }
	    return $result;
	}
	
	private function getHeader($nonce, $bizContent, $token, $userToken){
		//组装需要去计算签名的参数
		$date = date("Y-m-d H:i:s").".000";
		//$date = "2020-11-30 19:50:41.040";
		$values = array();
		$values['X-FDD-Api-App-Id'] = $this->appId;
		$values['X-FDD-Api-Timestamp'] = $date;
		$values['X-FDD-Api-Sign-Type'] = "HMAC-SHA256";
		$values['X-FDD-Api-Nonce'] = $nonce;
		if(is_null($token)){
			$values['X-FDD-Api-Grant-Type'] = "client_credential";
		}else{
			$values['X-FDD-Api-Token'] = $token;
			$values['bizContent'] = $bizContent;	
		}
		if(!is_null($userToken)){
			$values['X-FDD-Api-User-Token'] = $token;
		}
		//得到排序后的字符串
		$keys = array_keys($values);
		array_multisort($keys, SORT_ASC, SORT_STRING);
		$sortParam = $this->arrayParamToStr($values, $keys);
		//计算签名
		$signText = strtolower(hash("sha256", $sortParam));
		$hash = hash_hmac("sha256", $date, $this->appKey, true);
		$sign = hash_hmac("sha256", $signText, $hash);
		
		//返回header数组
		if(!is_null($token)){
			$values = $this->removeKey($values, "bizContent");
		}
		$values['X-FDD-Api-Sign'] = $sign;
		
		return $values;
	}
	
	private function arrayParamToStr($array, $keys){
      $Str = "";
	  foreach($keys as $k => $v){
             $Str .= $v."=".$array[$v]."&";
      }
      return trim($Str,"&");
    }
    
	
	private function removeKey($data, $key){
	    if(!array_key_exists($key, $data)){
	        return $data;
	    }
	    $keys = array_keys($data);
	    $index = array_search($key, $keys);
	    if($index !== FALSE){
	        array_splice($data, $index, 1);
	    }
    	return $data;
	}
}