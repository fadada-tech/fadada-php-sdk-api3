<?php

require_once '../Fdd.Template.Client.php';
require_once '../Fdd.Sdk.Client.php';
require_once '../req/Fdd.Api.Req.php';
require_once '../req/TemplateReq.php';

$templateClient = new TemplateClient(new Client("appId值", "appKey值", "请求url"));

/*****获取模板列表******/
$queryInfo = new QueryInfoReq();
$queryInfo->setPageSize(10);
$queryInfo->setCurrentPageNo(1);
$queryInfo->setStatus(1);

$queryTemplateListReq = new QueryTemplateListReq();
$queryTemplateListReq->setQueryInfo($queryInfo);

//随机数
$nonce = md5(time() . mt_rand(0, 1000));
$response = $templateClient->queryTemplateList("token值", $nonce, null, $queryTemplateListReq);
print($response);
/***********/

/*****获取模板详情******/
$getTemplateDetailReq = new GetTemplateDetailReq();
$getTemplateDetailReq->setTemplateId("模板id");

//随机数
$nonce = md5(time() . mt_rand(0, 1000));
$response = $templateClient->getTemplateDetail("token值", $nonce, null, $getTemplateDetailReq);
print($response);
/***********/