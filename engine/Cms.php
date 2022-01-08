<?php

namespace Engine;

use Engine\DI\DI;

class Cms
{
    /**
     * @var DI
     */
    private $di;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
    }

    /**
     * Run CMS
     */
    public function run()
    {
        $db = $this->di->get('test2');
        print_r($db);
    }
}