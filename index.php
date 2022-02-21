<?php

//$person = for who
function orderPizza($pizzaType, $person) {

    echo 'Creating new order... <br>';
    $price = calcPrice($pizzaType);

    $address = 'unknown';
    if ($person == 'koen') {
        $address = 'a yacht in Antwerp';
    } elseif ($person == 'manuele') {
        $address = 'somewhere in Belgium';
    } elseif ($person == 'students') {
        $address = 'BeCode office';
    }

    $toPrint = "A {$pizzaType} pizza should be sent to {$person} <br>The address: {$address}.";
    echo $toPrint . "<br>";
    echo "The bill is € {$price} . <br>Order finished. <br><br>";

}

function calcPrice($pizzaType) {
    $cost = 0;

    if ($pizzaType == 'marguerita') {
        $cost = 5;
    } else if($pizzaType == 'golden') {
        $cost = 100;
    } else if ($pizzaType == 'calzone') {
        $cost = 10;
    } else if ($pizzaType == 'hawaii') {
        throw new Exception('Computer says no');
    } else {
        throw new Exception('Chose a better pizza');
    }

    return $cost;
}

function orderPizza4All() {
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

orderPizza4All();