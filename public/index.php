<?php

    require_once "Currency.php";

    $cur = 'USD';
    echo 'cur 1 = ' . $cur . '<br>';
    $curr1 = new Currency($cur);

    try {
        $cur2 = 'USA';
        echo 'cur 2 = ' . $cur2 . '<br>';
        $curr2 = new Currency($cur2);

        echo $curr1->equals($curr2) ? 'Your currencies are equal' : 'Your currencies NOT equal';

    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
    echo '<br><br>';





    require_once "Money.php";

    $amount1 = 3600;
    $money1 = new Money($amount1, new Currency('EUR'));
    //print_r($money1);
    try {
        $amount2 = 3600;
        $money2 = new Money($amount2, new Currency('EUR'));
        //print_r($money2);
        if ($money1->equals($money2) && $amount1 === $amount2){
            echo 'Your money1 and money2 currencies and amounts are equal';
        } else {
            throw new InvalidArgumentException('Your money1 and money2 currencies OR amounts are NOT equal');
        }

        if ($money1->equals($money2)){
            echo 'Success added. Result: ' . $money1->add($money2) . ' ' . $money1->getCurrency()->getIsoCode();
        } else {
            throw new InvalidArgumentException('Your money1 and money2 currencies are NOT equal');
        }
    } catch (Exception $exception){
        echo $exception->getMessage();
    }
