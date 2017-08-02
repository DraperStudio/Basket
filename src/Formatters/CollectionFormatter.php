<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Formatters;

use BrianFaust\Basket\Contracts\Formatter;

class CollectionFormatter implements Formatter
{
    /**
     * @param $value
     *
     * @return mixed
     */
    public function format($value): array
    {
        return $value->toArray();
    }
}
