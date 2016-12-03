<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\Contracts\TaxRate;
use BrianFaust\Basket\TaxRates\Europe\FranceValueAddedTax;
use Money\Currency;

class France implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var FranceValueAddedTax
     */
    private $tax;

    /**
     * France constructor.
     */
    public function __construct(): void
    {
        $this->tax = new FranceValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return FranceValueAddedTax
     */
    public function rate() : TaxRate
    {
        return $this->tax;
    }

    /**
     * @return Currency
     */
    public function currency() : Currency
    {
        return $this->currency;
    }
}
