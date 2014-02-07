<?php

// Set up constants:
define('APP_PATH', dirname(__FILE__) . '/');

// Set up autoloaders:
require_once(APP_PATH . 'vendor/autoload.php');

$loader = function ($class) {
    $file = str_replace(array('\\', '_'), '/', $class);
    $file .= '.php';

    if(substr($file, 0, 1) == '/') {
        $file = substr($file, 1);
    }

    if(is_file(APP_PATH . $file)) {
        include(APP_PATH . $file);
        return;
    }
};

spl_autoload_register($loader, true, true);


// Set up config:
$_SETTINGS                                       = array();
$_SETTINGS['b8']['app']['namespace']             = 'MyApplication';
$_SETTINGS['b8']['app']['default_controller']    = null;
$_SETTINGS['b8']['view']['path']                 = APP_PATH . 'MyApplication/View/';
$_SETTINGS['b8']['database']['servers']['read']  = array('localhost');
$_SETTINGS['b8']['database']['servers']['write'] = array('localhost');
$_SETTINGS['b8']['database']['name']             = 'my_application';
$_SETTINGS['b8']['database']['username']         = 'root';
$_SETTINGS['b8']['database']['password']         = '';

$config = new b8\Config($_SETTINGS);

