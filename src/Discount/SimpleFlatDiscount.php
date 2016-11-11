<?php

namespace Ecomm\Discount;

use Ecomm\Order;

class SimpleFlatDiscount implements Discount
{
    /**
     * @var
     */
    private $amount;

    /**
     * SimpleFlatDiscount constructor.
     * @param $amount
     */
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function applyTo(Order $order)
    {
        // Validate order eligibility if needed
        // Apply to order as appropriate
    }
}