<?php

class redisW
{
    private static $_redis = null;

    function getInstance()
    {
        return self::__constract();
    }

    private function __constract()
    {
        if (!$this->_redis) {
            $this->_redis = new Redis();
            $this->_redis->connect('127.0.0.1', 6379);
        }

        return $this;
    }
}