<?php

namespace MyApplication;

class Application extends \b8\Application
{
    /**
     * In this example, we might want to override the default routing behaviour.
     */
    protected function initController()
    {
        $parts = $this->request->getPathParts();

        // Not calling anything specific? Load DefaultController
        if (!count($parts)) {
            $this->loadController('Default');
            return;
        }

        // Hello World controller:
        if ($parts[0] === 'hello') {
            $this->loadController('Hello');
            return;
        }
    }
}