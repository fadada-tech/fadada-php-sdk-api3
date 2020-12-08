<?php

interface IClient{
	
	public function request($token, $nonce, $userToken, $bizContent, $path);

    public function downLoad_request($token, $nonce, $userToken, $bizContent, $path);

    public function request_file($token, $nonce, $userToken, $bizContent, $path, array $files);
}
