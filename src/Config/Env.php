<?php

namespace KooKoo\Core\Config;

use Symfony\Component\Dotenv\Dotenv;

class Env
{
    private $envVars = [];

    public function __construct()
    {
        vard_dump("here");
        $dotenv = new Dotenv();
        $this->envVars = $dotenv->loadEnv(__DIR__ . '/.env');
    }

    public function getEnvVars()
    {
        return $this->envVars;
    }
}
