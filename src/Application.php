<?php

namespace KooKoo\Core;

use Symfony\Component\Dotenv\Dotenv;

/**
 * Kookoo PHP Framework Application Manager
 *
 * This class serves as the main entry point and manager of the Kookoo PHP framework,
 * responsible for bootstrapping the application and managing its components.
 *
 * @package kookoo/core
 */


class Application
{
    /**
     * Version number of the application/library.
     *
     * This property stores the version number of the KooKoo framework . 
     * The version is a string that follows the "Major.Minor.Patch" format, 
     * where "Major" is the major release version, "Minor" is the minor release 
     * version, and "Patch" is the patch release version. The version can also 
     * include additional labels such as "-alpha", "-beta", or "-rc1".
     *
     * @var string
     */
    protected $version = "0.1.0-alpha";
}
