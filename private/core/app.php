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
        echo "<pre>";
        print_r($this->getURL());
    }

    private function getURL()
    {
        // echo "<pre>";
        // print_r($_GET);
        return explode("/", filter_var(trim($_GET['url'],"/")),FILTER_SANITIZE_URL);
        // http://localhost:8080/Quick_Programming/public/students/subject/123
        // Array ( [0] => students [1] => subject [2] => 123 )
    }
 }
 