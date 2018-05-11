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
use Phalcon\Http\Request as BaseRequest;

class Request extends BaseRequest implements RequestInterface
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

}