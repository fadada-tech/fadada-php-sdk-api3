<?php

class TemplateClient
{

    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }


    const getTemplateDetailPath = "/template/getTemplateDetail";
    const queryTemplateListPath = "/template/queryTemplateList";

    /**
     * 查询模板列表
     *
     * @param $token
     * @param $nonce
     * @param $userToken
     * @param QueryTemplateListReq $req
     * @return mixed
     */
    function queryTemplateList($token, $nonce, $userToken, QueryTemplateListReq $req)
    {
        return $this->client->request($token, $nonce, $userToken, json_encode($req, JSON_FORCE_OBJECT), self::queryTemplateListPath);
    }

    /**
     * 获取模板详情
     *
     * @param $token
     * @param $nonce
     * @param $userToken
     * @param GetTemplateDetailReq $req
     * @return mixed
     */
    function getTemplateDetail($token, $nonce, $userToken, GetTemplateDetailReq $req)
    {
        return $this->client->request($token, $nonce, $userToken, json_encode($req, JSON_FORCE_OBJECT), self::getTemplateDetailPath);
    }


}