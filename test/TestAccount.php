<?php

require_once '../Fdd.Account.Client.php';
require_once '../Fdd.Sdk.Client.php';
require_once '../req/Fdd.Api.Req.php';
require_once '../req/AccountReq.php';

$accountClient = new AccountClient(new Client("000003", "30BOgfz4vcEu7h6TjpYPa1EJ", "http://127.0.0.1:8004/api/v3"));

/*****获取个人实名绑定地址******/
$getPersonUnionIdUrlReq = new GetPersonUnionIdUrlReq();
$getPersonUnionIdUrlReq->setIsMiniProgram(1);
$getPersonUnionIdUrlReq->setAuthScheme(1);
$getPersonUnionIdUrlReq->setAuthScope("1");
$getPersonUnionIdUrlReq->setClientId("client_id_15013477347");
$getPersonUnionIdUrlReq->setRedirectUrl("http://www.baidu.com");
//通知对象
$noticeReq = new NoticeReq();
$noticeReq->setNotifyAddress("15013477347");
$noticeReq->setNotifyWay(1);
$getPersonUnionIdUrlReq->setNotice($noticeReq);
//person对象
$personReq = new PersonReq();
$personReq->setMobile("15013477347");
$getPersonUnionIdUrlReq->setPerson($personReq);

//随机数
$nonce = md5(time().mt_rand(0,1000));
$response = $accountClient->getPersonUnionIdUrl("bb7435e7679049c1858e691508ae1b67", $nonce, $getPersonUnionIdUrlReq);
print($response);
/***********/