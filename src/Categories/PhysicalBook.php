<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Categories;

use BrianFaust\Basket\Product;
use BrianFaust\Basket\Contracts\Category;

class PhysicalBook implements Category
{
    /**
     * @param Product $product
     */
    public function categorise(Product $product)
    {
        $product->taxable(false);
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'Physical Book';
    }
}
