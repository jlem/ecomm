<?php namespace Ecomm\Discount;

use Ecomm\Order;

class SimplePercentageDiscount implements Discount
{
    /**
     * @var
     */
    private $discountPercentage;

    public function __construct($discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;
    }

    /**
     * @param Order $order
     * @return Order
     */
    public function applyTo(Order $order)
    {
        // Validate order eligibility if needed

        return $order->setOrderDiscount($order->getProductTotal() * $this->discount);
    }
}