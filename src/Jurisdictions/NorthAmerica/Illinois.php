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
use BrianFaust\Basket\TaxRates\NorthAmerica\IllinoisValueAddedTax;
use Money\Currency;

class Illinois implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var IllinoisValueAddedTax
     */
    private $tax;

    /**
     * Illinois constructor.
     */
    public function __construct()
    {
        $this->tax = new IllinoisValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return IllinoisValueAddedTax
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
