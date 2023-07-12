<?php

include "init.php";

//$data = User::action()->get_all();
$data = User::action()->get_by_id(2);

echo "<pre>";
print_r($data);

