<?php

require_once '../Fdd.Document.Client.php';
require_once '../Fdd.Sdk.Client.php';

/*****文档类******/
$documentClient = new DocumentClient(new Client("000003", "30BOgfz4vcEu7h6TjpYPa1EJ", "http://127.0.0.1:8004/api/v3"));

$uploadFileReq = new UploadFileReq();
$uploadFileReq->setFileType(1);

//随机数
$nonce = md5(time().mt_rand(0,1000));
//上传原始文件
/*$response = $documentClient->uploadFile("bb7435e7679049c1858e691508ae1b67",
    $nonce, null, $uploadFileReq, "C:/Users/huj1/Desktop/temp/test1.pdf");
print($response);*/
//下载签署文件
$getBySignFileReq = new GetBySignFileReq();
$getBySignFileReq->setTaskId("3347a686f1d24686b2a969f6a1366a3b");
$downLoadInfo = $documentClient->getBySignFileId("bb7435e7679049c1858e691508ae1b67",
    $nonce, null, $getBySignFileReq);
$contentType = $downLoadInfo['contentType'];
$body = $downLoadInfo['body'];
print($contentType."\n");
if($contentType == "application/zip"){
    $file = fopen("C:/Users/huj1\Desktop/temp/test1.zip", "a+");
    fwrite($file, $body);
}else{
    print($body."\n");
}

