<?php

class MySingletone
{
    private static $_instance;

    public $_dbConnection;

    private function __construct()
    {

    }

    static function getInstance()
    {
        if (!self::$_instance) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    public function getConfig()
    {
        return [
            'config',
        ];
    }
}

$s = MySingletone::getInstance();

$s->_dbConnection;
$s->getConfig();
