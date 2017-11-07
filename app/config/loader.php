<?php

use Phalcon\Loader;

$loader = new Loader();

/**
 * Register Namespaces
 */
$loader->registerNamespaces([
    'BP\Models' => APP_PATH . '/common/models/',
    'BP'        => APP_PATH . '/common/library/',
]);

/**
 * Register module classes
 */
$loader->registerClasses([
    'BP\Modules\Frontend\Module' => APP_PATH . '/modules/frontend/Module.php',
    'BP\Modules\Cli\Module'      => APP_PATH . '/modules/cli/Module.php'
]);

$loader->register();
