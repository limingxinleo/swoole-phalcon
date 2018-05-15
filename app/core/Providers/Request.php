<?php
// +----------------------------------------------------------------------
// | Request.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace App\Core\Providers;

use Swoole\Http\Request as SwooleRequest;
use Phalcon\Http\RequestInterface as PhalconRequestInterface;
use Phalcon\Di\InjectionAwareInterface;

class Request implements RequestInterface, InjectionAwareInterface, PhalconRequestInterface
{
    protected $swooleRequest;

    public function setSwooleRequest(SwooleRequest $request)
    {
        $this->swooleRequest = $request;
    }

    public function getSwoolerRequest()
    {
        return $this->swooleRequest;
    }

    public function getFd()
    {
        return $this->swooleRequest->fd;
    }

    public function setDI(\Phalcon\DiInterface $dependencyInjector)
    {
        // TODO: Implement setDI() method.
    }

    public function getDI()
    {
        // TODO: Implement getDI() method.
    }

    public function get($name = null, $filters = null, $defaultValue = null)
    {
        // TODO: Implement get() method.
    }

    public function getPost($name = null, $filters = null, $defaultValue = null)
    {
        // TODO: Implement getPost() method.
    }

    public function getQuery($name = null, $filters = null, $defaultValue = null)
    {
        // TODO: Implement getQuery() method.
    }

    public function getServer($name)
    {
        // TODO: Implement getServer() method.
    }

    public function has($name)
    {
        // TODO: Implement has() method.
    }

    public function hasPost($name)
    {
        // TODO: Implement hasPost() method.
    }

    public function hasPut($name)
    {
        // TODO: Implement hasPut() method.
    }

    public function hasQuery($name)
    {
        // TODO: Implement hasQuery() method.
    }

    public function hasServer($name)
    {
        // TODO: Implement hasServer() method.
    }

    public function getHeader($header)
    {
        // TODO: Implement getHeader() method.
    }

    public function getScheme()
    {
        // TODO: Implement getScheme() method.
    }

    public function isAjax()
    {
        // TODO: Implement isAjax() method.
    }

    public function isSoapRequested()
    {
        // TODO: Implement isSoapRequested() method.
    }

    public function isSecureRequest()
    {
        // TODO: Implement isSecureRequest() method.
    }

    public function getRawBody()
    {
        // TODO: Implement getRawBody() method.
    }

    public function getServerAddress()
    {
        // TODO: Implement getServerAddress() method.
    }

    public function getServerName()
    {
        // TODO: Implement getServerName() method.
    }

    public function getHttpHost()
    {
        // TODO: Implement getHttpHost() method.
    }

    public function getPort()
    {
        // TODO: Implement getPort() method.
    }

    public function getClientAddress($trustForwardedHeader = false)
    {
        // TODO: Implement getClientAddress() method.
    }

    public function getMethod()
    {
        // TODO: Implement getMethod() method.
    }

    public function getUserAgent()
    {
        // TODO: Implement getUserAgent() method.
    }

    public function isMethod($methods, $strict = false)
    {
        // TODO: Implement isMethod() method.
    }

    public function isPost()
    {
        // TODO: Implement isPost() method.
    }

    public function isGet()
    {
        // TODO: Implement isGet() method.
    }

    public function isPut()
    {
        // TODO: Implement isPut() method.
    }

    public function isHead()
    {
        // TODO: Implement isHead() method.
    }

    public function isDelete()
    {
        // TODO: Implement isDelete() method.
    }

    public function isOptions()
    {
        // TODO: Implement isOptions() method.
    }

    public function isPurge()
    {
        // TODO: Implement isPurge() method.
    }

    public function isTrace()
    {
        // TODO: Implement isTrace() method.
    }

    public function isConnect()
    {
        // TODO: Implement isConnect() method.
    }

    public function hasFiles($onlySuccessful = false)
    {
        // TODO: Implement hasFiles() method.
    }

    public function getUploadedFiles($onlySuccessful = false)
    {
        // TODO: Implement getUploadedFiles() method.
    }

    public function getHTTPReferer()
    {
        // TODO: Implement getHTTPReferer() method.
    }

    public function getAcceptableContent()
    {
        // TODO: Implement getAcceptableContent() method.
    }

    public function getBestAccept()
    {
        // TODO: Implement getBestAccept() method.
    }

    public function getClientCharsets()
    {
        // TODO: Implement getClientCharsets() method.
    }

    public function getBestCharset()
    {
        // TODO: Implement getBestCharset() method.
    }

    public function getLanguages()
    {
        // TODO: Implement getLanguages() method.
    }

    public function getBestLanguage()
    {
        // TODO: Implement getBestLanguage() method.
    }

    public function getBasicAuth()
    {
        // TODO: Implement getBasicAuth() method.
    }

    public function getDigestAuth()
    {
        // TODO: Implement getDigestAuth() method.
    }


}