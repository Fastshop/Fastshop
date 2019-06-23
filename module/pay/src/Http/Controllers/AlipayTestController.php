<?php
namespace App\Pay\Http\Controllers;

use AlipayFundTransToaccountTransferRequest;
use AopClient;
use App\Http\Controllers\Controller;

class AlipayTestController extends Controller {
    
    /** @var AopClient */
    protected $apiClient;
    
    /**
     * @return \AopClient
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function getClient()
    {
        if(empty($this->apiClient)) {
            $c = new AopClient;
            
            // "https://openapi.alipay.com/gateway.do";
            $c->gatewayUrl = config('pay.alipay.test.api_url');
            
            $c->appId = config('pay.alipay.test.appid');
            
            // '请填写开发者私钥去头去尾去回车，一行字符串' ;
            $c->rsaPrivateKey = config('pay.alipay.test.app_private_key');
            
            $c->format = 'json';
            $c->charset = 'utf-8';
            $c->signType = 'RSA2';
            
            // '请填写支付宝公钥，一行字符串';
            $c->alipayrsaPublicKey = config('pay.alipay.test.alipay_pub_key');
            $this->apiClient = $c;
        }
        
        return $this->apiClient;
    }
    
    public function excute($class, $data)
    {
        $request = is_object($class) ? $class : new $class;
        $request->setBizContent(is_array($data) ? json_encode($data) : $data);
        $result =  $this->getClient()->execute($request);
        $responseNode = str_replace(".", "_", $request->getApiMethodName()) . "_response";
        return $result->$responseNode;
    }
    
    public function index()
    {
        /**
         * 实例化具体 API 对应的 request 类,类名称和接口名称对应,
         * @see https://openhome.alipay.com/platform/demoManage.htm#/alipay.fund.trans.toaccount.transfer
         * 单笔转账到支付宝账户接口(alipay.fund.trans.toaccount.transfer)
         * SDK已经封装掉了公共参数，这里只需要传入业务参数
         */
        $result = $this->excute(
            AlipayFundTransToaccountTransferRequest::class,
            /** @lang JSON */ <<<JSON
{
    "out_biz_no": "12345345354",
    "payee_type": "ALIPAY_LOGONID",
    "payee_account": "labkbw4898@sandbox.com",
    "amount": "10",
    "payer_real_name": "",
    "payer_show_name": "",
    "payee_real_name": "",
    "remark": "",
    "ext_param": ""
}
JSON
        );
        kd($result);
    }
}