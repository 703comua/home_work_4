<?php

//Название валюты передавать в формате ISO 4217 (USD, EUR, ...) через конструктор класса.
//Для свойства isoCode написать гэттер и сеттер.
//В случае неверного формата названия валюты выбросить InvalidArgumentException.
//Реализовать публичный метод equals для сравнения двух валют на равенство.

class Currency
{
    private $isoCode;

    public function __construct(string $val)
    {
        if(mb_strlen($val) !== 3 || ctype_upper($val) !== true ) {
            throw new InvalidArgumentException('Error currency format');
        }

        $this->isoCode = $val;
    }
    public function getIsoCode()
    {
        return $this->isoCode;
    }

    public function setIsoCode(string $isoCode)
    {
        $this->isoCode = $isoCode;
    }

    public function equals(self $currency): bool
    {
        return (string)$this->isoCode === (string)$currency->getIsoCode();
    }
}