<?php

require_once 'Fdd.Api.Req.php';

/**
 * 查询模板列表请求对象
 * Class QueryTemplateListReq
 */
class QueryTemplateListReq
{
    public $queryInfo;

    /**
     * @return mixed
     */
    public function getQueryInfo()
    {
        return $this->queryInfo;
    }

    /**
     * @param mixed $queryInfo
     */
    public function setQueryInfo($queryInfo)
    {
        $this->queryInfo = $queryInfo;
    }

}

/**
 * 查询模板列表 queryInfo对象
 * Class GetTemplateDetailReq
 */
class QueryInfoReq
{
    public $status;
    public $currentPageNo;
    public $pageSize;
    public $keyword;

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getCurrentPageNo()
    {
        return $this->currentPageNo;
    }

    /**
     * @param mixed $currentPageNo
     */
    public function setCurrentPageNo($currentPageNo)
    {
        $this->currentPageNo = $currentPageNo;
    }

    /**
     * @return mixed
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param mixed $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return mixed
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param mixed $keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }

}

/**
 * 获取模板详情请求对象
 * Class GetTemplateDetailReq
 */
class GetTemplateDetailReq
{

    public $templateId;

    /**
     * @return mixed
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @param mixed $templateId
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
    }

}
