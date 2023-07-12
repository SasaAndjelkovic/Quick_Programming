<?php

include "init.php";

//$data = DB::table('users')->select()->all();
$data = DB::table('users')->select()->where("id = :id",["id"=> 2]);

echo "<pre>";
print_r($data);

