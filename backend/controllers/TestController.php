<?php
/*
 * @author Lmy
 * QQ:6232967
 * Create at 2015-12-27 16:10:14
 */
namespace backend\controllers;

use backend\components\Controller;
use Qiniu;
use Qiniu\Auth;

class TestController extends Controller{
    public function actionIndex(){
        

        $accessKey = 'RDFVgI2CMVHF-79JMXbIFpy9aVz4NJSTXc_wI6u2';
        $secretKey = 'l8vY4A3juunUVePBdP298RurE4f-xznX93_eT5mN';

        $auth = new Auth($accessKey, $secretKey);
        $bucket = "yubinzaojia";
        $token = $auth->uploadToken($bucket);
        echo $token;
        $filePath = './favicon.ico';

        // 上传到七牛后保存的文件名
        $key = 'my-php-logo.ico';

        // 初始化 UploadManager 对象并进行文件的上传。
        $uploadMgr = new \Qiniu\Storage\UploadManager();
        list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);
        echo "\n====> putFile result: \n";
        if ($err !== null) {
            var_dump($err);
        } else {
            var_dump($ret);
        }
        
        
        return $this->renderPartial("/video/test");
        
    }
}
?>

