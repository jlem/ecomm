<?php

use Ecomm\Order;

class ShippingCost
{
    /**
     * @var ShippingAPIService
     */
    private $shippingAPIService;

    /**
     * ShippingCost constructor.
     * @param ShippingAPIService $shippingAPIService
     */
    public function __construct(ShippingAPIService $shippingAPIService)
    {
        $this->shippingAPIService = $shippingAPIService;
    }

    /**
     * @param Order $order
     * @return Order
     */
    public function applyTo(Order $order)
    {
        // 1. Validate order, throw exception if invalid
        // 2. Obtain whatever data you need from the $order object
        // 3. Apply whatever logic/transformation you need
        // 4. Feed it to shipping service to get a value
        // 5. Apply that value however needed to the $order and return the order

        return $order->setShippingCost($this->shippingAPIService->getShippingAmount('foo'));
    }
}