<?php

class UploadFileReq{

    public $fileType;

    public $fileContentHash;

    /**
     * @return mixed
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * @param mixed $fileType
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
    }

    /**
     * @return mixed
     */
    public function getFileContentHash()
    {
        return $this->fileContentHash;
    }

    /**
     * @param mixed $fileContentHash
     */
    public function setFileContentHash($fileContentHash)
    {
        $this->fileContentHash = $fileContentHash;
    }
}

class GetBySignFileReq{

    public $taskId;

    public $signFileId;

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
    public function getSignFileId()
    {
        return $this->signFileId;
    }

    /**
     * @param mixed $signFileId
     */
    public function setSignFileId($signFileId)
    {
        $this->signFileId = $signFileId;
    }
}