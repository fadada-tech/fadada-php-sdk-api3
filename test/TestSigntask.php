<?php


require_once '../Fdd.Sdk.Client.php';
require_once '../req/Fdd.Api.Req.php';
require_once '../req/Fdd.SigntaskReq.php';
require_once '../Fdd.Signtask.Client.php';

/**
 * Created by IntelliJ IDEA.
 * User: huj1
 * Date: 2021/3/29
 * Time: 16:21
 */

$signtaskClient = new SigntaskClient(new Client("appId值", "appKey值", "请求url"));

/****************根据草稿id创建签署任务*********************/
$req = new CreateTaskByDraftIdReq();
$req->setTaskSubject("签署任务名称");
$req->setDraftId("草稿id");
$req->setSort(2);
$req->setStatus("sent");
//签约人结合
$signers = array();
$signer1 = new DraftTaskSignerReq();
$signer1->setTemplateRoleName("角色名称");
$externalSigner = new ExternalSignerReq();
$externalSigner->setMobile("手机号码");
$signer1->setExternalSigner($externalSigner);

$signers[] = $signer1;
$req->setSigners($signers);
//抄送人
$ccReq = new CcReq();
$ccReq->setPersonName("抄送人姓名");
$notice = new ReviseNoticeReq();
$notice->setNotifyWay(2);
$notice->setNotifyAddress("hjj2e@foxmail.com");
$ccReq->setNotice($notice);
$ccs = [$ccReq];
$req->setCcs($ccs);

//随机数
$nonce = md5(time().mt_rand(0,1000));
$response = $signtaskClient->createTaskByDraftId("token值", $nonce, null, $req);
print($response);
print("\n");

/******************获取快捷签链接********************************/
$quickUrlReq = new GetQuickSignUrlReq();
$quickUrlReq->setMobile("手机号码");
$quickUrlReq->setTaskId("签署任务编号");
$quickUrlReq->setRedirectUrl("http://www.fadada.com");
//随机数
$nonce = md5(time().mt_rand(0,1000));
$response = $signtaskClient->getQuickSignUrl("token值", $nonce, null, $quickUrlReq);
print($response);
print("\n");