<?php
// +----------------------------------------------------------------------
// | server.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------

define('ROOT_PATH', __DIR__);
define('APP_PATH', ROOT_PATH . '/app');
define('IS_CLI', false);

use App\Core\SwooleApplication;

// $application->handle()->send();

$http = new swoole_http_server("127.0.0.1", 9501);

$http->on('WorkerStart', function ($serv, $worker_id) {
    require_once ROOT_PATH . '/bootstrap/bootstrap.php';

    $application = SwooleApplication::getInstance();
    $application->useImplicitView(false);
});

$http->on('request', function ($request, $response) {
    $application = SwooleApplication::getInstance();
    // 需要重写App\Core\Providers\Request 类，不能再此覆盖$_SERVER、$_GET等参数

    dump($request);
    // $application->handle();
    // $response->end("<h1>Hello Swoole. #" . rand(1000, 9999) . "</h1>");
});

$http->start();