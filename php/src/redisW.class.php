<?php

class redisW
{
    private $_redis;

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

        return $this;
    }

    public function get($key)
    {
        return $this->_redis->get($key);
    }

    public function set($key, $value)
    {
        return $this->_redis->set($key, $value);
    }
}