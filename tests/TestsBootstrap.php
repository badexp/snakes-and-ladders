<?php
/**
 * Autoloader for tests
 */

use Phalcon\Loader;

$loader = new Loader();

$loader->registerDirs(
    [
        __DIR__ . '/../lib'
    ]
);

$loader->register();