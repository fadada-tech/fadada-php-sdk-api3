- 法大大Api3.0-PHP-SDK
  - 接入方接入示例     
    - sdk层级     
    ```php
        fadada-php-sdk-api3
            - req //里面放的是所有接口请求的对象参数
            - test //里面是接口的调用示例，接入方开发人员可以参考    
        Fdd.Xxx.Client.php //对应接口各个模块的client，接入方可以参考下面用例初始化client后调用
    ```
    
    - 调用示例      
      接入方初始化一个client，比如调用账号相关，通过client来发起请求。
      ```php
        $accountClient = new AccountClient(new Client("appId", "appKey", "http://127.0.0.1:8004/api/v3"));      
      ```
            
      - 获取个人实名绑定地址接口示例
    ```php
        $getPersonUnionIdUrlReq = new GetPersonUnionIdUrlReq();
        $getPersonUnionIdUrlReq->setIsMiniProgram(1);
        $getPersonUnionIdUrlReq->setAuthScheme(1);
        $getPersonUnionIdUrlReq->setAuthScope("1");
        $getPersonUnionIdUrlReq->setClientId("6666");
        $getPersonUnionIdUrlReq->setRedirectUrl("http://www.baidu.com");
        //通知对象
        $noticeReq = new ReviseNoticeReq();
        $noticeReq->setNotifyAddress("xxx");
        $noticeReq->setNotifyWay(1);
        $getPersonUnionIdUrlReq->setNotice($noticeReq);
        //person对象
        $personReq = new PersonReq();
        $personReq->setMobile("xxx");
        $getPersonUnionIdUrlReq->setPerson($personReq);
        
        //随机数
        $nonce = md5(time().mt_rand(0,1000));
        $response = $accountClient->getPersonUnionIdUrl("6113167ceba54728b55af007f9a80d66", $nonce, $getPersonUnionIdUrlReq);
        print($response);    
    ```
    