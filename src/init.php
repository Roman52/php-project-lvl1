<?php

if (! file_exists($composer = __DIR__ . '/../vendor/autoload.php')) {
    die('Error locating autoloader. Please run <code>make install</code>.');
}
require_once $composer;
