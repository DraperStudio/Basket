<?php

declare(strict_types=1);

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\NorthAmerica\NevadaValueAddedTax;
use Money\Currency;

class Nevada implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NevadaValueAddedTax
     */
    private $tax;

    /**
     * Nevada constructor.
     */
    public function __construct()
    {
        $this->tax = new NevadaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return NevadaValueAddedTax
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
