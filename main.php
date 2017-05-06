<?php
    require('city.php');
    require('country.php');
    $filename = 'log.txt';
    
    $a1 = array("New York", "Virginia", "California", "Florida", "Hawaii");
    $b1 = new City("Los Angeles", "4 million");
    $c1 = new Country("USA", "350 million", $a1, $b1);
    
    $a2 = array("Durango", "Puebla", "Guerrero", "Quintana Roo");
    $b2 = new City("Cancun", "700,000");
    $c2 = new Country("Mexico", "127 million", $a2, $b2);
    
    $countries = array($c1, $c2);
    
    $current = "\n";
    foreach ($countries as $country) {
        $current .= "Name: ".$country->name."\n";
        $current .= "Population: ".$country->population."\n";
        $current .= "Best States: ".implode(", ",$country->states)."\n";
        $current .= "Top State Count: ".count($country->states)."\n";
        $best_city = $country->best_city;
        $current .= "Best City: ".$best_city->name."\n";
        $current .= $best_city->name." Population: ".$best_city->population."\n";
        $current .= "\n";
    }
    file_put_contents($filename, $current);
    echo "\nDone.\n";
?>