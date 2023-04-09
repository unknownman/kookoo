<?php

namespace KooKoo\Core\Config;

use Symfony\Component\Dotenv\Dotenv;

class Env
{
    public $config;

    public function __construct()
    {
        $dotenv = new Dotenv();
        $this->config['env'] = $dotenv->loadEnv(__DIR__ . '/.env');
        return $this;
    }
}
