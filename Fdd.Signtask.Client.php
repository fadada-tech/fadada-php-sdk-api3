<?php

class SigntaskClient{

    private $client;

    public function __construct(IClient $client){
        $this->client = $client;
    }

    const CreateTaskByFilePath = "/signtasks/createTaskByFile";

    /**
     * 根据文件创建签署任务
     */
}