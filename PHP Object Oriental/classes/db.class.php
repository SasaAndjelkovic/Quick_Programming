<?php

class DB{
    protected static $instance;
    protected static $con;
    protected static $table;
    protected $query;
    protected $query_type;

    public static function table($table){
        self::$table = $table;
        if(!self::$instance) {
            self::$instance = new self();
        
        }
        if(!self::$con){
            try{
                //$string = "mysql:host=localhost;dbname=oop_db";
                $string = "mysql:host=".DBHOST.";dbname=.DBNAME";
                //$pdo = new PDO($string,DBUSER,DBPASS);
                self::$con = new PDO($string,DBUSER,DBPASS);
    
            }catch(PDOException $e){
                echo $e->getMessage();
                die;
            }
            return self::$instance;
        }
    }

    protected function run(){

    }

    public function all(){

    }
    
    public function where(){

    }

    public function select(){

    }

    public function update(){

    }
}