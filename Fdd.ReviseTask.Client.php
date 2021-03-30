<?php

class ReviseTaskClient
{

    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    const createReviseTaskPath = "/reviseTask/createReviseTask";
    const getFillFileUrlPath = "/reviseTask/getFillFileUrl";
    const reviseTaskDetailPath = "/reviseTask/reviseTaskDetail";


    /**
     * 创建定稿任务
     *
     * @param $token
     * @param $nonce
     * @param $userToken
     * @param CreateReviseTaskReq $req
     * @return mixed
     */
    function createReviseTask($token, $nonce, $userToken, CreateReviseTaskReq $req)
    {
        return $this->client->request($token, $nonce, $userToken, json_encode($req), self::createReviseTaskPath);
    }

    /**
     * 获取在线定稿地址
     * @param $token
     * @param $nonce
     * @param $userToken
     * @param GetFillFileUrlReq $req
     * @return mixed
     */
    function getFillFileUrl($token, $nonce, $userToken, GetFillFileUrlReq $req)
    {
        return $this->client->request($token, $nonce, $userToken, json_encode($req, JSON_FORCE_OBJECT), self::getFillFileUrlPath);
    }

    /**
     * 获取定稿详情
     *
     * @param $token
     * @param $nonce
     * @param $userToken
     * @param ReviseTaskDetailReq $req
     * @return mixed
     */
    function reviseTaskDetail($token, $nonce, $userToken, ReviseTaskDetailReq $req)
    {
        return $this->client->request($token, $nonce, $userToken, json_encode($req, JSON_FORCE_OBJECT), self::reviseTaskDetailPath);
    }


}