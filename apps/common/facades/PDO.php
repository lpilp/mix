<?php

namespace apps\common;

/**
 * RDB 门面类
 * @author 刘健 <coder.liu@qq.com>
 */
class PDO extends \mix\facades\PDO
{

    /**
     * 获取实例集合
     * @return array
     */
    public static function getInstances()
    {
        return [
            'config1' => app('config1')->pdo,
        ];
    }

}