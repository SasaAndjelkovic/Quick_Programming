<?php

include "init.php";

$data = DB::table('users')->select()->all();

echo "<pre>";
print_r($data);

