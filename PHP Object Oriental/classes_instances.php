<?php

class Database{
    public $hostname = "localhost";
    public $dbname = "mydb";
    public $find = "";
    function __construct($hostname = "localhost", $dbname = "mydb"){
 
    }
    public function __set($name, $value){
        //$this->$name = $value;
        echo "adding new properties not allowed";
    }

    public function __get($name){

        $name = str_replace("get", "", $name);
        $name = strtolower($name);

        $rows = $this->get_data();

        if(is_array($rows)){
            foreach ($rows as $row) {
                if(isset($row[$name]) && $row[$name] == $this->find) {
                    return $row;
                }
            }
        }

        return "could not find that data!";
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

    public function __call($method, $args){
        if(strstr($method, "get_by_")){
            $column = str_replace("get_by_", "", $method);
            return $this->get_by($column, $args[0]);
        }
        return "could not find that method!";
    }

    function get_by($column, $find){
        $rows = $this->get_data();

        if(is_array($rows)){
            foreach ($rows as $row) {
                if(isset($row[$column]) && $row[$column] == $find) {
                    return $row;
                }
            }
        }

        return "could not find that data!";
    }
}

$db = new Database();
$db->find = "mary";

//$db->missingfunction();
echo "<pre>";
print_r($db->get_by_age(24));

//echo "<pre>";
//print_r($db->name);