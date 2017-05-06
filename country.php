<?php

class Country {
    public $name;
    public $population;
    public $states;
    public $best_city;

    function __construct($arg1,$arg2,$arg3,$arg4) {
        $this->name = $arg1;
        $this->population = $arg2;
        $this->states = $arg3;
        $this->best_city = $arg4;
    }
}

?>