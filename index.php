<?php

//$person = for who
function order_pizza($pizzatype, $person) {

    echo 'Creating new order... <br>';
    $toPrint = 'A ';
    $toPrint .= $pizzatype;
    $price = calc_cts($pizzatype);

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

function total_price($price) {
    return $price;
}

        function test($p_type) {
            echo "Test: type is {$p_type}. <br>";
        }

function calc_cts($p_type)
{
    $cst = 'unknown';

    if ($p_type == 'marguerita') {
        $cst = 5;
    }
    else
        {
        if ($p_type == 'golden')
        {
            $cst = 100;
        }

            if ($p_type == 'calzone')
            {
                $cst = 10;
            }

        if ($p_type == 'hawaii') {
            throw new Exception('Computer says no');
        }
    }

    return $cst;
}

            function ordr_piz_all()
            {
            $test= 0;
            order_pizza('calzone', 'koen');
            order_pizza('marguerita', 'manuele');

            order_pizza('golden', 'students');
            }

function make_Allhappy($do_it) {
if ($do_it) {
        ordr_piz_all();
    } else {
        // Should not do anything when false
    }
}

make_Allhappy(true);