<?php

//$person = for who
function order_pizza($pizzaType, $person) {

    echo 'Creating new order... <br>';
    $toPrint = 'A ';
    $toPrint .= $pizzaType;
    $price = CalcPrice($pizzaType);

    $address = 'unknown';
    if($person == 'koen') {
        $address = 'a yacht in Antwerp';
    } elseif ($person == 'manuele') {
        $address = 'somewhere in Belgium';
    } elseif ($person == 'students') {
        $address = 'BeCode office';
    }

    $toPrint .=   "pizza should be sent to {$person} <br>The address: {$address}.";
    echo $toPrint;
    echo '<br>';
    echo "The bill is € {$price} .<br>";
    echo "Order finished.<br><br>";

}

function CalcPrice($pizzaType) {
    $cost = 0;

    if ($pizzaType == 'marguerita') {
        $cost = 5;
    } else if($pizzaType == 'golden') {
        $cost = 100;
    } else if ($pizzaType == 'calzone') {
        $cost = 10;
    } else if ($pizzaType == 'hawaii') {
        throw new Exception('Computer says no');
    }

    return $cost;
}

function orderPizza4All() {
    order_pizza('calzone', 'koen');
    order_pizza('marguerita', 'manuele');
    order_pizza('golden', 'students');
}

function makeAllHappy($do_it) {
    if ($do_it) {
        orderPizza4All();
    } 
}

makeAllHappy(true);