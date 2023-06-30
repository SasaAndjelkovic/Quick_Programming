<?php

class Database{
    public $hostname = "localhost";
    public $dbname = "mydb";
    function __construct($hostname = "localhost", $dbname = "mydb"){
 
    }
    public function __set($name, $value){
        //$this->$name = $value;
        echo "adding new properties not allowed";
    }

    public function __get($name){

        //return get_data();  // Uncaught Error: Call to undefined function get_data()
        return $this->get_data(); 
    }   

    private function get_data(){
        $arr = array();
        $arr['id'] = '1';
        $arr['name'] = 'john';
        $arr['age'] = '24';
        $arr['gender'] = 'male';

        $rows[] = $arr;
        $arr = array();
        $arr['id'] = '2';
        $arr['name'] = 'mary';
        $arr['age'] = '20';
        $arr['gender'] = 'female';

        $rows[] = $arr;
        $arr = array();
        $arr['id'] = '3';
        $arr['name'] = 'peter';
        $arr['age'] = '34';
        $arr['gender'] = 'male';

        $rows[] = $arr;
        $arr = array();
        $arr['id'] = '4';
        $arr['name'] = 'jack';
        $arr['age'] = '84';
        $arr['gender'] = 'male';

        $rows[] = $arr;
        
        return $rows;
    }
}

$db = new Database();

echo "<pre>";
print_r($db->gender);