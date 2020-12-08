<?php

require_once '../Fdd.Oauth2.Client.php';
require_once '../Fdd.Sdk.Client.php';

/*****获取token******/
$oauth2Client = new Oauth2Client(new Client("000003", "30BOgfz4vcEu7h6TjpYPa1EJ", "http://127.0.0.1:8004/api/v3"));
//随机数
$nonce = md5(time().mt_rand(0,1000));
$response = $oauth2Client->getAccessToken($nonce);
print($response);
/***********/