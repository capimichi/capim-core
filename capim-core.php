<?php
/*
   Plugin Name: Cm Core
   Plugin URI: #
   Very useful
   Version: 1.0.0
   Author: Michele Capicchioni
   Author URI: #
   License: GPL2
*/

use CapimPluginWP\Kernel;

require_once "src/autoload.php";
require_once "vendor/autoload.php";

$controllers = [
    dirname(__FILE__) . "/src/CapimCore/Controller",
];

$kernel = new Kernel(
    dirname(__FILE__) . "/app/Resources/views",
    __FILE__,
    $controllers,
    dirname(__FILE__) . "/var/cache/twig",
    dirname(__FILE__) . "/var/cache/annotation",
    dirname(__FILE__) . "/var/cache/cmdb"
);

