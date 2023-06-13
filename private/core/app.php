<?php

/**
 * main app file
 */

 class App
 {
    protected $controller = "home"; 
    protected $method = "index"; 
    protected $params = array(); 

    public function __construct()
    {
        echo "construct";
    }
 }
 