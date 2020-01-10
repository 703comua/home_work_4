<?php

    require_once "Currency.php";

    $cur = 'USD';
    echo 'cur 1 = ' . $cur . '<br>';
    $curr1 = new Currency($cur);

    try {
        $cur2 = 'USD';
        echo 'cur 2 = ' . $cur2 . '<br>';
        $curr2 = new Currency($cur2);

        echo $curr1->equals($curr2) ? 'Your currencies are equal' : 'Your currencies NOT equal';

    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
    echo '<br><br>';





    require_once "Money.php";

    $money1 = new Money(3600, new Currency('EUR'));
    print_r($money1);
    try {
        $money2 = new Money(3500, new Currency('USD'));
        print_r($money2);
        if ($money1->equals($money2)){
            echo 'Your money1 and money2 currencies are equal';
        } else {
            throw new Exception('Your money1 and money2 currencies NOT equal');
        }

    } catch (Exception $exception){
        echo $exception->getMessage();
    }
