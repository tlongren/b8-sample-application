<?php

namespace MyApplication\Controller;

use MyApplication\Controller;

class HelloController extends Controller
{
    /**
     * Try this out by accessing /hello/world or /hello/jack
     */
    public function __call($whom, $args = array())
    {
        $this->response->setContent('Hello ' . ucwords($whom));
    }
}