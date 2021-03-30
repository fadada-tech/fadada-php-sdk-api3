<?php

class SigntaskClient{

    private $client;

    public function __construct(IClient $client){
        $this->client = $client;
    }

    const CreateTaskByFilePath = "/signtasks/createTaskByFile";

    const CreateTaskByDraftIdPath = "/signtasks/createTaskByDraftId";

    const GetQuickSignUrl = "/signtasks/getQuickSignUrl";

    /**
     * 根据草稿id创建签署任务
     */
    function createTaskByDraftId($token, $nonce, $userToken, CreateTaskByDraftIdReq $req){
        return $this->client->request($token, $nonce, $userToken,
            json_encode($req), self::CreateTaskByDraftIdPath);
    }

    /**
     * 获取快捷签链接
     */
    function getQuickSignUrl($token, $nonce, $userToken, GetQuickSignUrlReq $req){
        return $this->client->request($token, $nonce, $userToken,
            json_encode($req), self::GetQuickSignUrl);
    }
}