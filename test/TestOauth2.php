<?php

require_once '../Fdd.Oauth2.Client.php';
require_once '../Fdd.Sdk.Client.php';

/*****获取token******/
$oauth2Client = new Oauth2Client(new Client("appId值", "appKey值", "请求url"));
//随机数
$nonce = md5(time().mt_rand(0,1000));
$response = $oauth2Client->getAccessToken($nonce);
print($response);
/***********/