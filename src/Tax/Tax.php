<?php namespace Ecomm\Tax;

use Ecomm\Order;

interface Tax
{
    public function calculateTax(Order $order);
}