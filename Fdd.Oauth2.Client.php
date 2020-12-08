<?php

require_once 'Fdd.Sdk.IClient.php';

class Oauth2Client{

	private $client;
	
	public function __construct(IClient $client){
		$this->client = $client;
	}
	
	const GetAccessTokenPath = "/oauth2/accessToken";
	
	/**
	 * 获取客户端令牌
	 * Enter description here ...
	 * @param $nonce
	 */
	function getAccessToken($nonce){
		return $this->client->request(null, $nonce, null, null, self::GetAccessTokenPath);
	}
}

