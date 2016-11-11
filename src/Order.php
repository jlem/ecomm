<?php namespace Ecomm;

use Ecomm\Tax\Tax;
use ShippingCost;

class Order
{
    private $items = [];
    private $taxCost = 0;
    private $shippingCost = 0;
    private $discountCost = 0;

    // Shipping/billing information properties etc

    public function addItem(OrderItem $orderItem)
    {
        $this->items[$orderItem->getProduct()->getId()] = $orderItem;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param $taxCost
     * @return Order $this
     */
    public function setTaxCost($taxCost)
    {
        $this->taxCost = $taxCost;

        return $this;
    }

    /**
     * @param $discount
     * @return Order $this
     */
    public function setOrderDiscount($discount)
    {
        $this->discountCost = $discount;

        return $this;
    }

    /**
     * @param $shippingCost
     * @return Order $this
     */
    public function setShippingCost($shippingCost)
    {
        $this->shippingCost = $shippingCost;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductTotal()
    {
        return array_reduce($this->items, function ($total, OrderItem $item) {
            return $total += $item->getTotalCost();
        }, 0);
    }

    public function getSubTotal()
    {

    }

    public function getGrandTotal()
    {

    }
}