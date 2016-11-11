<?php namespace Ecomm\Discount;

use Ecomm\Order;

interface Discount
{
    public function calculateDiscount(Order $order);
}