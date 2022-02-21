<?php

function orderPizza($pizzaType, $person) 
{
    $price = getPrice($pizzaType);
    $address = getAddress($person);

    echo 'Creating new order... <br>';
    echo "A {$pizzaType} pizza should be sent to {$person} <br>The address: {$address}.<br>";
    echo "The bill is € {$price} . <br>Order finished. <br><br>";
}

function getAddress($person) 
{
    if ($person == 'koen') {
        $address = 'a yacht in Antwerp';
    } elseif ($person == 'manuele') {
        $address = 'somewhere in Belgium';
    } elseif ($person == 'students') {
        $address = 'BeCode office';
    }
    return $address;
}

function getPrice($pizzaType) 
{

    if ($pizzaType == 'marguerita') {
        $cost = 5;
    } else if ($pizzaType == 'golden') {
        $cost = 100;
    } else if ($pizzaType == 'calzone') {
        $cost = 10;
    } else if ($pizzaType == 'hawaii') {
        throw new Exception('Computer says no');
    } else {
        throw new Exception('Choose a better pizza');
    }

    return $cost;
}

function placeOrders() {
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

placeOrders();