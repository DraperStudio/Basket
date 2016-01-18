<?php

namespace DraperStudio\Basket\Jurisdictions\Europe;

use DraperStudio\Basket\Contracts\Jurisdiction;
use DraperStudio\Basket\TaxRates\Europe\GermanyValueAddedTax;
use Money\Currency;

class Germany implements Jurisdiction
{
    private $currency;

    private $tax;

    public function __construct()
    {
        $this->tax = new GermanyValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    public function rate()
    {
        return $this->tax;
    }

    public function currency()
    {
        return $this->currency;
    }
}
