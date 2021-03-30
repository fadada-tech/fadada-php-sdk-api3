<?php

require_once 'Fdd.Api.Req.php';

class CreateReviseTaskReq
{
    public $templateId;
    public $taskSubject;
    public $finalizeWay;
    public $taskStatus;
    public $sort;
    public $fillRoles;
    public $templateFiles;

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

    /**
     * @return mixed
     */
    public function getTaskSubject()
    {
        return $this->taskSubject;
    }

    /**
     * @param mixed $taskSubject
     */
    public function setTaskSubject($taskSubject)
    {
        $this->taskSubject = $taskSubject;
    }

    /**
     * @return mixed
     */
    public function getFinalizeWay()
    {
        return $this->finalizeWay;
    }

    /**
     * @param mixed $finalizeWay
     */
    public function setFinalizeWay($finalizeWay)
    {
        $this->finalizeWay = $finalizeWay;
    }

    /**
     * @return mixed
     */
    public function getTaskStatus()
    {
        return $this->taskStatus;
    }

    /**
     * @param mixed $taskStatus
     */
    public function setTaskStatus($taskStatus)
    {
        $this->taskStatus = $taskStatus;
    }

    /**
     * @return mixed
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param mixed $sort
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
    }

    /**
     * @return mixed
     */
    public function getFillRoles()
    {
        return $this->fillRoles;
    }

    /**
     * @param mixed $fillRoles
     */
    public function setFillRoles($fillRoles)
    {
        $this->fillRoles = $fillRoles;
    }

    /**
     * @return mixed
     */
    public function getTemplateFiles()
    {
        return $this->templateFiles;
    }

    /**
     * @param mixed $templateFiles
     */
    public function setTemplateFiles($templateFiles)
    {
        $this->templateFiles = $templateFiles;
    }

}

class FillRoleReq
{
    public $roleName;
    public $notice;
    public $externaler;
    public $unionId;
    public $fillTemplateFiles;

    /**
     * @return mixed
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * @param mixed $roleName
     */
    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;
    }

    /**
     * @return mixed
     */
    public function getNotice()
    {
        return $this->notice;
    }

    /**
     * @param mixed $notice
     */
    public function setNotice($notice)
    {
        $this->notice = $notice;
    }

    /**
     * @return mixed
     */
    public function getExternaler()
    {
        return $this->externaler;
    }

    /**
     * @param mixed $externaler
     */
    public function setExternaler($externaler)
    {
        $this->externaler = $externaler;
    }

    /**
     * @return mixed
     */
    public function getUnionId()
    {
        return $this->unionId;
    }

    /**
     * @param mixed $unionId
     */
    public function setUnionId($unionId)
    {
        $this->unionId = $unionId;
    }

    /**
     * @return mixed
     */
    public function getFillTemplateFiles()
    {
        return $this->fillTemplateFiles;
    }

    /**
     * @param mixed $fillTemplateFiles
     */
    public function setFillTemplateFiles($fillTemplateFiles)
    {
        $this->fillTemplateFiles = $fillTemplateFiles;
    }

}

class ExternalerReq
{
    public $mobile;
    public $name;

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}

class FillTemplateFileReq
{
    public $fileId;
    public $formFields;

    /**
     * @return mixed
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    /**
     * @param mixed $fileId
     */
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;
    }

    /**
     * @return mixed
     */
    public function getFormFields()
    {
        return $this->formFields;
    }

    /**
     * @param mixed $formFields
     */
    public function setFormFields($formFields)
    {
        $this->formFields = $formFields;
    }

}

class TemplateFileReq
{
    public $fileId;
    public $fileName;

    /**
     * @return mixed
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    /**
     * @param mixed $fileId
     */
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

}

class GetFillFileUrlReq
{
    public $taskId;
    public $roleName;

    /**
     * @return mixed
     */
    public function getTaskId()
    {
        return $this->taskId;
    }

    /**
     * @param mixed $taskId
     */
    public function setTaskId($taskId)
    {
        $this->taskId = $taskId;
    }

    /**
     * @return mixed
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * @param mixed $roleName
     */
    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;
    }

}

class ReviseTaskDetailReq
{
    public $taskId;

    /**
     * @return mixed
     */
    public function getTaskId()
    {
        return $this->taskId;
    }

    /**
     * @param mixed $taskId
     */
    public function setTaskId($taskId)
    {
        $this->taskId = $taskId;
    }

}
