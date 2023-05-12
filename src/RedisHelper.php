<?php

namespace Fengdangxing\HyperfRedis;

use Hyperf\Utils\ApplicationContext;
/**
 * @var \Hyperf\Redis\Redis
 */
class RedisHelper
{
    public static $timeout = 7200;
    /**
     * @return \Hyperf\Redis\Redis
     */
    public static function init()
    {
        $container = ApplicationContext::getContainer();
        return $container->get(\Hyperf\Redis\Redis::class);
    }
}