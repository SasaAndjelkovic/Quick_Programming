<?php

interface Car{
    public function miles_per_hour(float $miles);
}

class isuzu implements Car{
    public $tank_size = 4;
    public function miles_per_hour(float $miles){
        return $this->tank_size * $miles;
    }
}

class bmw implements Car{
    public $tank_size = 2;
    public function miles_per_hour(float $miles){
        return $this->tank_size * $miles;
    }
}

function stuff(Car $myclass){
    echo $myclass->miles_per_hour(2.5) . "<br>";
}

$bmw = new bmw;
stuff($bmw);

$isuzu = new isuzu;
stuff($isuzu);