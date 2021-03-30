<?php
/**
 * Created by IntelliJ IDEA.
 * User: huj1
 * Date: 2021/3/29
 * Time: 14:47
 */

class CreateTaskByDraftIdReq {

    public $draftId;

    public $taskSubject;

    public $status;

    public $autoArchive;

    public $sort;

    public $ccs = array();

    public $sender;

    public $signers = array();

    /**
     * @return mixed
     */
    public function getDraftId()
    {
        return $this->draftId;
    }

    /**
     * @param mixed $draftId
     */
    public function setDraftId($draftId)
    {
        $this->draftId = $draftId;
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
    public function getAutoArchive()
    {
        return $this->autoArchive;
    }

    /**
     * @param mixed $autoArchive
     */
    public function setAutoArchive($autoArchive)
    {
        $this->autoArchive = $autoArchive;
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
     * @return array
     */
    public function getCcs(): array
    {
        return $this->ccs;
    }

    /**
     * @param array $ccs
     */
    public function setCcs(array $ccs)
    {
        $this->ccs = $ccs;
    }

    /**
     * @return mixed
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param mixed $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return array
     */
    public function getSigners(): array
    {
        return $this->signers;
    }

    /**
     * @param array $signers
     */
    public function setSigners(array $signers)
    {
        $this->signers = $signers;
    }
}

class TaskSenderReq{

    public $agentId;

    /**
     * @return mixed
     */
    public function getAgentId()
    {
        return $this->agentId;
    }

    /**
     * @param mixed $agentId
     */
    public function setAgentId($agentId)
    {
        $this->agentId = $agentId;
    }
}

class CcReq{

    public $personName;

    public $companyName;

    public $notice;

    /**
     * @return mixed
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * @param mixed $personName
     */
    public function setPersonName($personName)
    {
        $this->personName = $personName;
    }

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
}

class DraftTaskSignerReq {
    
    public $templateRoleName;

    public $signOrder;

    public $lock;

    public $signer;

    public $externalSigner;

    /**
     * @return mixed
     */
    public function getTemplateRoleName()
    {
        return $this->templateRoleName;
    }

    /**
     * @param mixed $templateRoleName
     */
    public function setTemplateRoleName($templateRoleName)
    {
        $this->templateRoleName = $templateRoleName;
    }

    /**
     * @return mixed
     */
    public function getSignOrder()
    {
        return $this->signOrder;
    }

    /**
     * @param mixed $signOrder
     */
    public function setSignOrder($signOrder)
    {
        $this->signOrder = $signOrder;
    }

    /**
     * @return mixed
     */
    public function getLock()
    {
        return $this->lock;
    }

    /**
     * @param mixed $lock
     */
    public function setLock($lock)
    {
        $this->lock = $lock;
    }

    /**
     * @return mixed
     */
    public function getSigner()
    {
        return $this->signer;
    }

    /**
     * @param mixed $signer
     */
    public function setSigner($signer)
    {
        $this->signer = $signer;
    }

    /**
     * @return mixed
     */
    public function getExternalSigner()
    {
        return $this->externalSigner;
    }

    /**
     * @param mixed $externalSigner
     */
    public function setExternalSigner($externalSigner)
    {
        $this->externalSigner = $externalSigner;
    }
}

class ExternalSignerReq {

    public $mobile;

    public $personName;

    public $externalCorp;

    public $personInfo;

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
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * @param mixed $personName
     */
    public function setPersonName($personName)
    {
        $this->personName = $personName;
    }

    /**
     * @return mixed
     */
    public function getExternalCorp()
    {
        return $this->externalCorp;
    }

    /**
     * @param mixed $externalCorp
     */
    public function setExternalCorp($externalCorp)
    {
        $this->externalCorp = $externalCorp;
    }

    /**
     * @return mixed
     */
    public function getPersonInfo()
    {
        return $this->personInfo;
    }

    /**
     * @param mixed $personInfo
     */
    public function setPersonInfo($personInfo)
    {
        $this->personInfo = $personInfo;
    }
}

class ExternalCorpReq {

    public $corpName;

    /**
     * @return mixed
     */
    public function getCorpName()
    {
        return $this->corpName;
    }

    /**
     * @param mixed $corpName
     */
    public function setCorpName($corpName)
    {
        $this->corpName = $corpName;
    }
}

class PersonInfoReq {

    public $idCardNo;

    /**
     * @return mixed
     */
    public function getIdCardNo()
    {
        return $this->idCardNo;
    }

    /**
     * @param mixed $idCardNo
     */
    public function setIdCardNo($idCardNo)
    {
        $this->idCardNo = $idCardNo;
    }
}

class SignerReq {

    /**
     * 签署人对象
     */
    public $signatory;

            /**
             * 企业签署信息，企业自动签 只需要传企业unionId就可以
             */
    public $corp;

            /**
             * 签署动作，签署方式，签署意愿认证方式
             */
    public $signAction;

            /**
             * 通知对象
             */
    public $notice;

    /**
     * @return mixed
     */
    public function getSignatory()
    {
        return $this->signatory;
    }

    /**
     * @param mixed $signatory
     */
    public function setSignatory($signatory)
    {
        $this->signatory = $signatory;
    }

    /**
     * @return mixed
     */
    public function getCorp()
    {
        return $this->corp;
    }

    /**
     * @param mixed $corp
     */
    public function setCorp($corp)
    {
        $this->corp = $corp;
    }

    /**
     * @return mixed
     */
    public function getSignAction()
    {
        return $this->signAction;
    }

    /**
     * @param mixed $signAction
     */
    public function setSignAction($signAction)
    {
        $this->signAction = $signAction;
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
}

class SignatoryReq {

    public $signerId;

    public $seal;

    public $acrossSign;

    /**
     * @return mixed
     */
    public function getSignerId()
    {
        return $this->signerId;
    }

    /**
     * @param mixed $signerId
     */
    public function setSignerId($signerId)
    {
        $this->signerId = $signerId;
    }

    /**
     * @return mixed
     */
    public function getSeal()
    {
        return $this->seal;
    }

    /**
     * @param mixed $seal
     */
    public function setSeal($seal)
    {
        $this->seal = $seal;
    }

    /**
     * @return mixed
     */
    public function getAcrossSign()
    {
        return $this->acrossSign;
    }

    /**
     * @param mixed $acrossSign
     */
    public function setAcrossSign($acrossSign)
    {
        $this->acrossSign = $acrossSign;
    }
}

class SealReq {

    public $sealId;

    /**
     * @return mixed
     */
    public function getSealId()
    {
        return $this->sealId;
    }

    /**
     * @param mixed $sealId
     */
    public function setSealId($sealId)
    {
        $this->sealId = $sealId;
    }
}

class CorpReq {

    public $corpId;

    public $seal;

    /**
     * @return mixed
     */
    public function getCorpId()
    {
        return $this->corpId;
    }

    /**
     * @param mixed $corpId
     */
    public function setCorpId($corpId)
    {
        $this->corpId = $corpId;
    }

    /**
     * @return mixed
     */
    public function getSeal()
    {
        return $this->seal;
    }

    /**
     * @param mixed $seal
     */
    public function setSeal($seal)
    {
        $this->seal = $seal;
    }
}

class SignActionReq {

    public $signWay;

    public $signIntendWay;

    /**
     * @return mixed
     */
    public function getSignWay()
    {
        return $this->signWay;
    }

    /**
     * @param mixed $signWay
     */
    public function setSignWay($signWay)
    {
        $this->signWay = $signWay;
    }

    /**
     * @return mixed
     */
    public function getSignIntendWay()
    {
        return $this->signIntendWay;
    }

    /**
     * @param mixed $signIntendWay
     */
    public function setSignIntendWay($signIntendWay)
    {
        $this->signIntendWay = $signIntendWay;
    }
}

class GetQuickSignUrlReq {

    public $taskId;

    public $mobile;

    public $redirectUrl;

    public $miniProgram;

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
    public function getMiniProgram()
    {
        return $this->miniProgram;
    }

    /**
     * @param mixed $miniProgram
     */
    public function setMiniProgram($miniProgram)
    {
        $this->miniProgram = $miniProgram;
    }
}