<?php
// +----------------------------------------------------------------------
// | SwooleApplication.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace App\Core;

use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Application;

class SwooleApplication extends Application
{
    public static $swooleInstance;

    public static function getInstance()
    {
        if (static::$swooleInstance instanceof static) {
            return static::$swooleInstance;
        }

        $di = FactoryDefault::getDefault();;

        return static::$swooleInstance = new static($di);
    }
}