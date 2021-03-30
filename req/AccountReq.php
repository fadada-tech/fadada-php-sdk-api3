<?php

require_once 'Fdd.Api.Req.php';

/**
 * 获取个人unionIdUrl地址
 * Class GetPersonUnionIdUrlReq
 */
class GetPersonUnionIdUrlReq
{

    public $clientId;

    public $reRealName;

    public $notice;

    public $allowModify;

    public $redirectUrl;

    public $notifyUrl;

    public $person;

    public $authScope;

    public $authScheme;

    public $isMiniProgram;

    public $modifyUrl;

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
     * @return mixed
     */
    public function getReRealName()
    {
        return $this->reRealName;
    }

    /**
     * @param mixed $reRealName
     */
    public function setReRealName($reRealName)
    {
        $this->reRealName = $reRealName;
    }

    /**
     * @return mixed
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * @param mixed $notifyUrl
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
    }

    /**
     * @return mixed
     */
    public function getModifyUrl()
    {
        return $this->modifyUrl;
    }

    /**
     * @param mixed $modifyUrl
     */
    public function setModifyUrl($modifyUrl)
    {
        $this->modifyUrl = $modifyUrl;
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
class PersonReq
{
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

/**
 * 获取企业unionIdUrl地址
 * Class GetCompanyUnionIdUrlReq
 */
class GetCompanyUnionIdUrlReq
{
    public $clientId;

    public $company;

    public $applicant;

    public $bank;

    public $notice;

    public $redirectUrl;

    public $authScope;

    public $allowModify;

    public $authScheme;

    public $isMiniProgram;

    public $reRealName;

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
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return mixed
     */
    public function getApplicant()
    {
        return $this->applicant;
    }

    /**
     * @param mixed $applicant
     */
    public function setApplicant($applicant)
    {
        $this->applicant = $applicant;
    }

    /**
     * @return mixed
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @param mixed $bank
     */
    public function setBank($bank)
    {
        $this->bank = $bank;
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
    public function getIsMiniProgram()
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
    public function getReRealName()
    {
        return $this->reRealName;
    }

    /**
     * @param mixed $reRealName
     */
    public function setReRealName($reRealName)
    {
        $this->reRealName = $reRealName;
    }


}


/**
 * CompanyReq类
 * Class CompanyReq
 */
class CompanyReq
{
    public $companyName;

    /**
     * 统一社会信用代码
     */
    public $creditNo;

    /**
     * 机构法人名称
     */
    public $legalName;

    /**
     * 组织类型：0，企业；1，政府/事业单位；2，其他组织；3，个体工商户
     */
    public $organizationType;

    /**
     * 三证合一电子照base64
     */
    public $creditImageBase64;


    /**
     * 企业申请表base64
     */
    public $authorizationFileBase64;

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param mixed $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    /**
     * @return mixed
     */
    public function getCreditNo()
    {
        return $this->creditNo;
    }

    /**
     * @param mixed $creditNo
     */
    public function setCreditNo($creditNo)
    {
        $this->creditNo = $creditNo;
    }

    /**
     * @return mixed
     */
    public function getLegalName()
    {
        return $this->legalName;
    }

    /**
     * @param mixed $legalName
     */
    public function setLegalName($legalName)
    {
        $this->legalName = $legalName;
    }

    /**
     * @return mixed
     */
    public function getOrganizationType()
    {
        return $this->organizationType;
    }

    /**
     * @param mixed $organizationType
     */
    public function setOrganizationType($organizationType)
    {
        $this->organizationType = $organizationType;
    }

    /**
     * @return mixed
     */
    public function getCreditImageBase64()
    {
        return $this->creditImageBase64;
    }

    /**
     * @param mixed $creditImageBase64
     */
    public function setCreditImageBase64($creditImageBase64)
    {
        $this->creditImageBase64 = $creditImageBase64;
    }

    /**
     * @return mixed
     */
    public function getAuthorizationFileBase64()
    {
        return $this->authorizationFileBase64;
    }

    /**
     * @param mixed $authorizationFileBase64
     */
    public function setAuthorizationFileBase64($authorizationFileBase64)
    {
        $this->authorizationFileBase64 = $authorizationFileBase64;
    }

}

/**
 * 银行相关信息
 * Class BankReq
 */
class BankReq
{
    /**
     * 银行名称
     */
    public $bankName;
    /**
     * 支行名称
     */
    public $bandBranchName;
    /**
     * 银行卡号
     */
    public $bankCardNo;
    /**
     * 银行所在省份
     */
    public $bankProvinceName;
    /**
     * 银行所在市
     */
    public $bankCityName;

    /**
     * @return mixed
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * @param mixed $bankName
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
    }

    /**
     * @return mixed
     */
    public function getBandBranchName()
    {
        return $this->bandBranchName;
    }

    /**
     * @param mixed $bandBranchName
     */
    public function setBandBranchName($bandBranchName)
    {
        $this->bandBranchName = $bandBranchName;
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

    /**
     * @return mixed
     */
    public function getBankProvinceName()
    {
        return $this->bankProvinceName;
    }

    /**
     * @param mixed $bankProvinceName
     */
    public function setBankProvinceName($bankProvinceName)
    {
        $this->bankProvinceName = $bankProvinceName;
    }

    /**
     * @return mixed
     */
    public function getBankCityName()
    {
        return $this->bankCityName;
    }

    /**
     * @param mixed $bankCityName
     */
    public function setBankCityName($bankCityName)
    {
        $this->bankCityName = $bankCityName;
    }

}

/**
 * ApplicantReq 对象
 */
class ApplicantReq{

    public $unionId;

    /**
     * 申请人身份1：法人 2：代理人 如果type为2时生效，默认为1
     */
    public $applicantType;

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
    public function getApplicantType()
    {
        return $this->applicantType;
    }

    /**
     * @param mixed $applicantType
     */
    public function setApplicantType($applicantType)
    {
        $this->applicantType = $applicantType;
    }

}