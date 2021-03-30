<?php

require_once '../Fdd.Document.Client.php';
require_once '../Fdd.Sdk.Client.php';

/*****文档类******/
$documentClient = new DocumentClient(new Client("appId值", "appKey值", "请求url"));

$uploadFileReq = new UploadFileReq();
$uploadFileReq->setFileType(1);

//随机数
$nonce = md5(time().mt_rand(0,1000));
//上传原始文件
$response = $documentClient->uploadFile("token值",
    $nonce, null, $uploadFileReq, "C:/Users/fadada/Desktop/temp/200.docx");
print($response);
//下载签署文件
/*$getBySignFileReq = new GetBySignFileReq();
$getBySignFileReq->setTaskId("3347a686f1d24686b2a969f6a1366a3b");
$downLoadInfo = $documentClient->getBySignFileId("660ebece4e554ea5b7677824a5e59970",
    $nonce, null, $getBySignFileReq);
$contentType = $downLoadInfo['contentType'];
$body = $downLoadInfo['body'];
print($contentType."\n");
if($contentType == "application/zip"){
    $file = fopen("C:/Users/fadada\Desktop/temp/test1.zip", "a+");
    fwrite($file, $body);
}else{
    print($body."\n");
}*/

