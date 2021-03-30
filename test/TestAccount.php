<?php

require_once '../Fdd.Account.Client.php';
require_once '../Fdd.Sdk.Client.php';
require_once '../req/Fdd.Api.Req.php';
require_once '../req/AccountReq.php';

$accountClient = new AccountClient(new Client("appId值", "appKey值", "请求url"));

/*****获取个人实名绑定地址******/
$getPersonUnionIdUrlReq = new GetPersonUnionIdUrlReq();
$getPersonUnionIdUrlReq->setIsMiniProgram(1);
$getPersonUnionIdUrlReq->setAuthScheme(1);
$getPersonUnionIdUrlReq->setAuthScope("1");
$getPersonUnionIdUrlReq->setClientId("6666");
$getPersonUnionIdUrlReq->setRedirectUrl("http://www.fadada.com");
//通知对象
$noticeReq = new NoticeReq();
$noticeReq->setNotifyAddress("手机号码");
$noticeReq->setNotifyWay(1);
$getPersonUnionIdUrlReq->setNotice($noticeReq);
//person对象
$personReq = new PersonReq();
$personReq->setMobile("手机号码");
$getPersonUnionIdUrlReq->setPerson($personReq);

//随机数
$nonce = md5(time() . mt_rand(0, 1000));
$response = $accountClient->getPersonUnionIdUrl("token值", $nonce, $getPersonUnionIdUrlReq);
print($response);
/***********/

/*****获取企业实名绑定地址******/
$getCompanyUnionIdUrlReq = new GetCompanyUnionIdUrlReq();
$getCompanyUnionIdUrlReq->setClientId("6666");

$companyReq = new CompanyReq();
$companyReq->setCompanyName("企业名称");
$getCompanyUnionIdUrlReq->setCompany($companyReq);

$applicant = new ApplicantReq();
$applicant->setUnionId("申请人unionId值");
$applicant->setApplicantType(1);
$getCompanyUnionIdUrlReq->setApplicant($applicant);

//通知对象
$noticeReq = new NoticeReq();
$noticeReq->setNotifyAddress("手机号码");
$noticeReq->setNotifyWay(1);
$getCompanyUnionIdUrlReq->setNotice($noticeReq);

$getCompanyUnionIdUrlReq->setRedirectUrl("http://wwww.fadada.com");
$getCompanyUnionIdUrlReq->setAuthScope("1");
$getCompanyUnionIdUrlReq->setAllowModify(1);

$nonce = md5(time() . mt_rand(0, 1000));
$response = $accountClient->getCompanyUnionIdUrl("token值", $nonce, $getCompanyUnionIdUrlReq);
print($response);
/***********/

/*****获取接入方实名绑定信息******/
$nonce = md5(time() . mt_rand(0, 1000));
$response = $accountClient->getAccessObjectInfo("token值", $nonce);
print($response);
/***********/