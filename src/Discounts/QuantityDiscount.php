<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Discounts;

use Money\Money;
use BrianFaust\Basket\Product;
use BrianFaust\Basket\Contracts\Discount;

class QuantityDiscount implements Discount
{
    /**
     * @var
     */
    private $quantity;

    /**
     * @var Discount
     */
    private $rate;

    /**
     * QuantityDiscount constructor.
     *
     * @param $quantity
     * @param Discount $rate
     */
    public function __construct($quantity, Discount $rate)
    {
        $this->quantity = $quantity;
        $this->rate = $rate;
    }

    /**
     * @param Product $product
     *
     * @return Money
     */
    public function product(Product $product): Money
    {
        if ($product->quantity >= $this->quantity) {
            return $this->rate->product($product);
        }

        return new Money(0, $product->price->getCurrency());
    }

    /**
     * @return Discount
     */
    public function rate(): Discount
    {
        return $this->rate;
    }
}
