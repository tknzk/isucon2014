<?php

class redisW
{
    private static $_redis = null;

    public static function getInstance()
    {
        return new redisW();
    }

    private function __construct()
    {
        if (!$this->_redis) {
            $this->_redis = new Redis();
            $this->_redis->connect('127.0.0.1', 6379);
        }

        return $this->_redis;
    }
}