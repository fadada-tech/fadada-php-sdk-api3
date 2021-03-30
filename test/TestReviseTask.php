<?php

require_once '../Fdd.ReviseTask.Client.php';
require_once '../Fdd.Sdk.Client.php';
require_once '../req/Fdd.Api.Req.php';
require_once '../req/ReviseTaskReq.php';

$reviseTaskClient = new ReviseTaskClient(new Client("appId值", "appKey值", "请求url"));

/*****创建定稿任务******/
$createReviseTaskReq = new CreateReviseTaskReq();
$createReviseTaskReq->setTemplateId("模板id");
$createReviseTaskReq->setTaskSubject("定稿任务主题");
$createReviseTaskReq->setSort(1);
$createReviseTaskReq->setTaskStatus(0);
$createReviseTaskReq->setFinalizeWay(1);


// 修改模板文件名称 (使用模板文件不用传值)
$templateFiles = array();
$templateFileReq = new TemplateFileReq();
$templateFileReq->setFileId("文件id");
$templateFileReq->setFileName("修改后名称");
$templateFiles[] = $templateFileReq;
$createReviseTaskReq->setTemplateFiles($templateFileReq);


$fillRoleReq1 = new FillRoleReq();
$fillRoleReq1->setRoleName("角色名称");

// 设置通知对象
$notice1 = new NoticeReq();
$notice1->setNotifyAddress("手机号码");
$notice1->setNotifyWay(1);
$fillRoleReq1->setNotice($notice1);

// 外部填写人设置 （内外部联系人要有一个）
$externalerReq1 = new ExternalerReq();
$externalerReq1->setMobile("手机号码");
$externalerReq1->setName("外部填写人名称");
$fillRoleReq1->setExternaler($externalerReq1);

// 内部填写人设置
//$fillRoleReq1->setUnionId("uuuuuu");

// 填写的值
$fillTemplateFiles = array();
$fillTemplateFileReq = new FillTemplateFileReq();
$fillTemplateFileReq->setFileId("文件id");
$fillTemplateFileReq->setFormFields("{\"age\":\"20岁\",\"name\":\"张三\",}");
$fillTemplateFiles[] = $fillTemplateFileReq;

$fillRoleReq1->setFillTemplateFiles($fillTemplateFiles);

$fillRoles = array();
$fillRoles[] = $fillRoleReq1;
$createReviseTaskReq->setFillRoles($fillRoles);

//随机数
$nonce = md5(time() . mt_rand(0, 1000));
$response = $reviseTaskClient->createReviseTask("token值", $nonce, null, $createReviseTaskReq);
print($response);
/***********/


/*****获取在线定稿链接******/
$getFillFileUrlReq = new GetFillFileUrlReq();
$getFillFileUrlReq->setRoleName("角色名称");
$getFillFileUrlReq->setTaskId("定稿任务编号");

//随机数
$nonce = md5(time() . mt_rand(0, 1000));
$response = $reviseTaskClient->getFillFileUrl("token值", $nonce, null, $getFillFileUrlReq);
print($response);
/***********/


/*****获取定稿详情******/
$reviseTaskDetailReq = new ReviseTaskDetailReq();
$reviseTaskDetailReq->setTaskId("定稿任务编号");

//随机数
$nonce = md5(time() . mt_rand(0, 1000));
$response = $reviseTaskClient->reviseTaskDetail("token值", $nonce, null, $reviseTaskDetailReq);
print($response);
/***********/