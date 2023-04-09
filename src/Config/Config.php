<?php

namespace KooKoo\Core;

use Symfony\Component\Dotenv\Dotenv;

class Config
{
    public $config;

    public function __construct()
    {
        $dotenv = new Dotenv();
        $this->config['env'] = $dotenv->loadEnv(__DIR__ . '/.env');
        return $this;
    }
}
