<?php

//to access the users table

class User {  
    protected static $instance;
    function __construct(){

    }

    public static function action(){
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function create(){

    }

    public function get_all(){
        return DB::table('users')->select()->all();
    }

    public function get_by_id($id){
        return DB::table('users')->select()->where("id = :id",["id"=> $id]);
    }

    public function get_by_email($email){

    }
}