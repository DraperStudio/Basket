<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Jurisdictions\SouthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\SouthAmerica\ArgentinaValueAddedTax;
use Money\Currency;

class Argentina implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var ArgentinaValueAddedTax
     */
    private $tax;

    /**
     * Argentina constructor.
     */
    public function __construct()
    {
        $this->tax = new ArgentinaValueAddedTax();
        $this->currency = new Currency('ARS');
    }

    /**
     * @return ArgentinaValueAddedTax
     */
    public function rate(): TaxRate
    {
        return $this->tax;
    }

    /**
     * @return Currency
     */
    public function currency(): Currency
    {
        return $this->currency;
    }
}
