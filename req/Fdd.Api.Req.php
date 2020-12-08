<?php

class NoticeReq{

    public $notifyWay;

    public $notifyAddress;

    /**
     * @return mixed
     */
    public function getNotifyWay()
    {
        return $this->notifyWay;
    }

    /**
     * @param mixed $notifyWay
     */
    public function setNotifyWay($notifyWay)
    {
        $this->notifyWay = $notifyWay;
    }

    /**
     * @return mixed
     */
    public function getNotifyAddress()
    {
        return $this->notifyAddress;
    }

    /**
     * @param mixed $notifyAddress
     */
    public function setNotifyAddress($notifyAddress)
    {
        $this->notifyAddress = $notifyAddress;
    }
}