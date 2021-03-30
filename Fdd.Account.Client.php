<?php

require_once 'Fdd.Sdk.IClient.php';
require_once 'req/AccountReq.php';

class AccountClient
{

    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    const GetPersonUnionIdUrlPath = "/accounts/getPersonUnionIdUrl";

    const GetCompanyUnionIdUrlPath = "/accounts/getCompanyUnionIdUrl";

    const getAccessObjectInfoPath = "/accounts/getAccessObjectInfo";

    /**
     * 获取个人unionId绑定地址
     * Enter description here ...
     * @param $token
     * @param $nonce
     * @param GetPersonUnionIdUrlReq $req
     * @return string
     */
    function getPersonUnionIdUrl($token, $nonce, GetPersonUnionIdUrlReq $req)
    {
        return $this->client->request($token, $nonce, null, json_encode($req, JSON_FORCE_OBJECT), self::GetPersonUnionIdUrlPath);
    }

    /**
     * 获取企业unionId绑定地址
     * Enter description here ...
     * @param $token
     * @param $nonce
     * @param GetPersonUnionIdUrlReq $req
     * @return string
     */
    function getCompanyUnionIdUrl($token, $nonce, GetCompanyUnionIdUrlReq $req)
    {
        return $this->client->request($token, $nonce, null, json_encode($req, JSON_FORCE_OBJECT), self::GetCompanyUnionIdUrlPath);
    }


    /**
     * 获取接入方实名绑定信息
     *
     * @param $token
     * @param $nonce
     * @return mixed
     */
    function getAccessObjectInfo($token, $nonce)
    {
        return $this->client->request($token, $nonce, null, "{}", self::getAccessObjectInfoPath);
    }

}
