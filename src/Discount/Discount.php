<?php namespace Ecomm\Discount;

use Ecomm\Order;

interface Discount
{
    public function applyTo(Order $order);
}