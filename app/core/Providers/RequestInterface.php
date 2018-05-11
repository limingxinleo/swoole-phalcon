<?php
// +----------------------------------------------------------------------
// | RequestInterface.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace App\Core\Providers;

use Swoole\Http\Request as SwooleRequest;

interface RequestInterface
{
    public function setSwooleRequest(SwooleRequest $request);

    public function getSwoolerRequest();

    public function getFd();
}