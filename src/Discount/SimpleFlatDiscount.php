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

    public function calculateDiscount(Order $order)
    {
        // Validate order eligibility if needed

        return $this->amount;
    }
}