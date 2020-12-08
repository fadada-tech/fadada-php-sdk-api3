<?php

require_once 'Fdd.Api.Req.php';

/**
 * 获取个人unionIdUrl地址
 * Class GetPersonUnionIdUrlReq
 */
class GetPersonUnionIdUrlReq{
	
	public $clientId;

    public $allowModify;

    public $redirectUrl;

    public $authScope;

    public $authScheme;

    public $isMiniProgram;

    public $notice;

    public $person;

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param mixed $clientId
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }

    /**
     * @return mixed
     */
    public function getAllowModify()
    {
        return $this->allowModify;
    }

    /**
     * @param mixed $allowModify
     */
    public function setAllowModify($allowModify)
    {
        $this->allowModify = $allowModify;
    }

    /**
     * @return mixed
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param mixed $redirectUrl
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }

    /**
     * @return mixed
     */
    public function getAuthScope()
    {
        return $this->authScope;
    }

    /**
     * @param mixed $authScope
     */
    public function setAuthScope($authScope)
    {
        $this->authScope = $authScope;
    }

    /**
     * @return mixed
     */
    public function getAuthScheme()
    {
        return $this->authScheme;
    }

    /**
     * @param mixed $authScheme
     */
    public function setAuthScheme($authScheme)
    {
        $this->authScheme = $authScheme;
    }

    /**
     * @return mixed
     */
    public function getisMiniProgram()
    {
        return $this->isMiniProgram;
    }

    /**
     * @param mixed $isMiniProgram
     */
    public function setIsMiniProgram($isMiniProgram)
    {
        $this->isMiniProgram = $isMiniProgram;
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
    public function setNotice(NoticeReq $notice)
    {
        $this->notice = $notice;
    }

    /**
     * @return mixed
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param mixed $person
     */
    public function setPerson(PersonReq $person)
    {
        $this->person = $person;
    }
}

/**
 * person类
 * Class PersonReq
 */
class PersonReq{
    public $name;
    public $identType;
    public $identNo;
    public $mobile;
    public $idPhotoOptional;
    public $backIdCardImgBase64;
    public $idCardImgBase64;
    public $bankCardNo;

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

    /**
     * @return mixed
     */
    public function getIdentType()
    {
        return $this->identType;
    }

    /**
     * @param mixed $identType
     */
    public function setIdentType($identType)
    {
        $this->identType = $identType;
    }

    /**
     * @return mixed
     */
    public function getIdentNo()
    {
        return $this->identNo;
    }

    /**
     * @param mixed $identNo
     */
    public function setIdentNo($identNo)
    {
        $this->identNo = $identNo;
    }

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
    public function getIdPhotoOptional()
    {
        return $this->idPhotoOptional;
    }

    /**
     * @param mixed $idPhotoOptional
     */
    public function setIdPhotoOptional($idPhotoOptional)
    {
        $this->idPhotoOptional = $idPhotoOptional;
    }

    /**
     * @return mixed
     */
    public function getBackIdCardImgBase64()
    {
        return $this->backIdCardImgBase64;
    }

    /**
     * @param mixed $backIdCardImgBase64
     */
    public function setBackIdCardImgBase64($backIdCardImgBase64)
    {
        $this->backIdCardImgBase64 = $backIdCardImgBase64;
    }

    /**
     * @return mixed
     */
    public function getIdCardImgBase64()
    {
        return $this->idCardImgBase64;
    }

    /**
     * @param mixed $idCardImgBase64
     */
    public function setIdCardImgBase64($idCardImgBase64)
    {
        $this->idCardImgBase64 = $idCardImgBase64;
    }

    /**
     * @return mixed
     */
    public function getBankCardNo()
    {
        return $this->bankCardNo;
    }

    /**
     * @param mixed $bankCardNo
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->bankCardNo = $bankCardNo;
    }

}


