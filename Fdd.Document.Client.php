<?php

require_once 'req/Fdd.DocumentReq.php';

class DocumentClient{

    private $client;

    public function __construct(IClient $client){
        $this->client = $client;
    }

    const UploadFilePath = "/documents/uploadFile";
    const GetBySignFileId = "/documents/getBySignFileId";

    /**
     * 上传原始文件
     * @param $token
     * @param $nonce
     * @param $userToken
     * @param UploadFileReq $req
     * @param $filePath
     * @return mixed
     */
    function uploadFile($token, $nonce, $userToken, UploadFileReq $req, $filePath){
       // $fileContent = fopen($filePath, "rb");
       // $fileHash = $this->getFinalHash($fileContent);
        $fileHash = hash_file("sha256", $filePath);
        print("file hash = ".$fileHash."\n");
        $req->setFileContentHash($fileHash);
        $files = Array();
        $files["fileContent"] = $filePath;
        return $this->client->request_file($token, $nonce, $userToken, json_encode($req, JSON_FORCE_OBJECT),
            self::UploadFilePath, $files);
    }

    /**
     * 下载签署文件
     * @param $token
     * @param $nonce
     * @param $userToken
     * @param GetBySignFileReq $req
     */
    function getBySignFileId($token, $nonce, $userToken, GetBySignFileReq $req){
        return $this->client->downLoad_request($token, $nonce, $userToken, json_encode($req, JSON_FORCE_OBJECT),
            self::GetBySignFileId);
    }


    function getFinalHash($fp, $MB = 1048576){
        $hashes = [];
        while (($buffer = fread($fp, $MB))!=="") {
            $hashes[] = hash("sha256", $buffer, true);
        }
        if(count($hashes)==1){
            return bin2hex($hashes[0]);
        }
        while(true){
            $hashes_new = [];
            foreach($hashes as $k => $hash){
                if ($k % 2 == 0) {
                    if(isset($hashes[$k+1])){
                        $hashes_new[] = hash("sha256", $hash.$hashes[$k+1], true);
                    }
                }
            }
            if(count($hashes)>2 && count($hashes) % 2 != 0){
                $hashes_new[] = $hashes[count($hashes)-1];
            }
            if(count($hashes_new)>1){
                $hashes = $hashes_new;
            }else{
                return bin2hex($hashes_new[0]);
            }
        }
    }

}
