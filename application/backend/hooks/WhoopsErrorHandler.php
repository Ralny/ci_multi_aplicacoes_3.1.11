<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class WhoopsErrorHandler {

    function WhoopsConfig()
    {
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();
    }
}