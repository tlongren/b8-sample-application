<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

try {
    require_once('../bootstrap.php');
    $application = new MyApplication\Application($config);
    $response = $application->handleRequest();

    die($response);

} catch (Exception $ex) {
    // Global everything has broken catch-all handler.
    throw $ex;
}