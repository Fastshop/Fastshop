<?php
namespace App\Pay\Http\Controllers;

use AlipayFundTransToaccountTransferRequest;
use AopClient;
use App\Http\Controllers\Controller;

/**
 * Class apipay_resp
 * @package App\Pay\Http\Controllers
 * @property string $code
 * @property string $msg
 * @property string $sub_code
 * @property string $sub_msg
 */
class apipay_resp extends \ArrayObject {

}

class AlipayTestController extends Controller {
    
    /** @var AopClient */
    protected $apiClient;
    
    /**
     * @return \AopClient
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    protected function getClient()
    {
        if(empty($this->apiClient)) {
            $c = new AopClient;
            
            if(empty(config('pay.alipay.test'))) {
                config(['pay.alipay.test' => [
                    'appid' => "2016101100658397",
                    'api_url' => 'https://openapi.alipaydev.com/gateway.do',
                    'alipay_pub_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAotz4hY8s6jBhFeA37xEXWHBfZK1hTJ+Xslmt+shJdG4/TGtkNLzMzm4DRJ5QLZltS77jK2HPuvMe1KmMDu0OsBZD8YcrekmTtfjXZUwDTTHDY76otudqpe8TR554T1pc7mdJlJUi1pC/IA2MaJOmZzqjfKKBB5LyrjXbNsl/D+ykMmtfEz5w78C3cbnnTpOXwitK8rV8NAuXEaYp1MgBW2SqTBz+/q974k31mV1OYWIUXk/tyNxytZAb87FLa6O3lMZrAuVjBOH4mKq7BWugOTCVfRwbtFefN23aQ8Xf8pJGTUZtxq9keQxStERYHucrGNyhsR2cDFERSiT+XWDUgwIDAQAB',
                    'app_pub_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxR0AFVAhAqUKmMXThZ4C947dgCJcZJs2Zc4YjDtZh0YfKUxnR5i8n1fX3FTxPKcTIdt7rPhuMcirAK2TRqbXcUAcHzZws1bs7dA/E3mhXxmDxBnUYf95hBdOAS/A75vknWlcpjEmJlP/5irkHQTGl1UH/wLHbYOFchm+15Ae1Fb/f1GBcr5aK/cxxZnD5vljrHFSofQIZnKq3W+o/cXYBjVEqrz1OJKQglxnvEQPt7tHtgzPMxk3Z6uZUZ2kGzqLYH0Fh0p9GK5LWkKDnvE+YHrgM6C0LDRTAGxQln1sbPyi3hUitZWgQuYzjsVfa0m6iMkuSYdQmZitceAu08tuDwIDAQAB',
                    'app_private_key' => "MIIEpAIBAAKCAQEAxR0AFVAhAqUKmMXThZ4C947dgCJcZJs2Zc4YjDtZh0YfKUxnR5i8n1fX3FTxPKcTIdt7rPhuMcirAK2TRqbXcUAcHzZws1bs7dA/E3mhXxmDxBnUYf95hBdOAS/A75vknWlcpjEmJlP/5irkHQTGl1UH/wLHbYOFchm+15Ae1Fb/f1GBcr5aK/cxxZnD5vljrHFSofQIZnKq3W+o/cXYBjVEqrz1OJKQglxnvEQPt7tHtgzPMxk3Z6uZUZ2kGzqLYH0Fh0p9GK5LWkKDnvE+YHrgM6C0LDRTAGxQln1sbPyi3hUitZWgQuYzjsVfa0m6iMkuSYdQmZitceAu08tuDwIDAQABAoIBAQClQxpFxEfY8sz+p6YfugpcyrBVdPmn9CZYlsIoGL6IVzdbJc7VzW4f3sOB3Mnhg2bcFSwNKsEhBlCxIdZ//vRU5F5voPI+uputC9NGncy5cifyq4FQpKSaJfvlrMcDXd4ASE1AnaaRrg24Sa+10MI8MTOiEA9qd0HUF1fVXeUrO0kM8PpCRZtofKlVnmRZU6/oJRFfeSKSTzuzwG4quAila6shMFIIP6zuRPJ6KDjFVBx8GG3jXqMG1S/k1ZytalwpJmWQ2pUEvCS6zPu2cPvytvCNK9ilJINqjtnqwZmKwyPWF2Po5ZjTgBmRsY3Eg3o9mVKACtFIsEfYm7hMbX3RAoGBAOJk5b/RB9rtJqruAwQiWyHBXhTpyXgaNRGDgeBUyus+kP7hsxaaPKTOMNPqUF9PuzgwKUhkSJ7QBtFHz9yGFVXdH7kYEtNNYgv1FMtc2Pk2KA7IR2v74tXBoDpPd3sXjPDIZoSqtKO55GqdheRinhRfhEaF65o1ZPdgUaUfPrVpAoGBAN7j2qseOelKCuHJAxOTeXpc/kvbZ6OE2BoVzJV8CvgMRcCPlMvc/K5D7hMeUv/SVEv/DoP9dpreUft4IwFFSN8LMi42+3DwPkSzvsf1B/dl6vGQ752tbAd27ZLuhu+fR2IEojXYtA5XcJmJo8hmyCiqQuDQ1qNvpFdEXZcsgcC3AoGBAISvcd/sGNh8qW8AtA/WOucbt5I2OvgDFBtBofrid1NMhhp8GUQj/Wrx1bg92gEib63MvEVLUSyS64v4tKCgjRyXzqHitBXXgqFTcG6H6jqVPQD87K8jH5z8MHY8YOBpuxbbvQoAKoLSzkaWMATcr51tJc9XafAlXxmFABTwrQYRAoGAW6/hUMjjS6sQpOZ6ZIAi1YoRdYTwshxAhSJ4gPmAzZ7GxrqJm/7w1oLNGYI85E1SLdzizLrkIjrYAJjf1XL50f6aCtbFQiUhiENkdH7AYy3CotJbL0KakMuEWQ/T5BhiVdjQHVRiZQ/lGtO60wIszkWTs0VVNfAD634M/dXqHisCgYB9Xh6TwG63J2jDR2abT5E3iZr+j4ygDC8S8nd7wYw4gaT/RWeX+fQ2Q7HbTKpAhm/ar0VWW3VUtYYL+2t4dKBOv9rRx+r5J0OrjGlDNdRvEWXHGegqpn4EPcOwwB03ZJU+0OQleoBTQHJ7YfdBAHP1OUDpyUrpCyouCcglYZRW+g==",
                ]]);
            }
            
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
    
    /**
     * @param $class
     * @param $data
     * @return apipay_resp
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    protected function excute($class, $data)
    {
        $request = is_object($class) ? $class : new $class;
        $request->setBizContent(is_array($data) ? json_encode($data) : $data);
        $result = $this->getClient()->execute($request);
        $responseNode = str_replace(".", "_", $request->getApiMethodName()) . "_response";
        return new apipay_resp((array)$result->$responseNode, 2);
    }
    
    /**
     * @param \AlipayFundTransToaccountTransferRequest $api
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     * 实例化具体 API 对应的 request 类,类名称和接口名称对应,
     * @see https://openhome.alipay.com/platform/demoManage.htm#/alipay.fund.trans.toaccount.transfer
     * 单笔转账到支付宝账户接口(alipay.fund.trans.toaccount.transfer)
     * SDK已经封装掉了公共参数，这里只需要传入业务参数
     */
    public function getIndex(AlipayFundTransToaccountTransferRequest $api)
    {
        $result = $this->excute($api, /** @lang JSON */ <<<JSON
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
        //kd($result->code);
        return response()->json($result);
    }
}