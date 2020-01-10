<?php

// Создать класс Money с приватным свойствами: amount (int|float) и currency (Currency).

// Число и валюту принимать через конструктор класса.
// Для свойств amount и currency написать гэттеры и сеттеры.
// Реализовать публичный метод equals для сравнения двух денежных единиц по числу и валюте.
// Реализовать метода add (для суммирования денежных единиц), который будет принимать объект Money.
// Если валюта добавляемого объекта отличается, то выбросить InvalidArgumentException.

class Money
{
    private $amount;
    private $currency;

    public function __construct(float $amount, Currency $currency)
    {
        if ($amount < 0) {
            throw new InvalidArgumentException('Your amount must be 0 or higher');
        }
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    public function setAmount(float $amount)
    {
        $this->amount = $amount;
    }
    public function setCurrency(Currency $currency)
    {
        $this->currency = $currency;
    }

    public function equals(self $money): bool
    {
        var_dump($this->currency);
        echo '<br>';
        var_dump($money->currency);
        echo '<br>';
        return $this->currency->equals($money->getCurrency());
    }

//    public function add(self $money): float
//    {
//        return $this->amount + $money->getAmount();
//    }

}