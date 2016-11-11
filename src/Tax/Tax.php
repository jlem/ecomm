<?php namespace Ecomm\Tax;

use Ecomm\Order;

interface Tax
{
    public function applyTo(Order $order);
}