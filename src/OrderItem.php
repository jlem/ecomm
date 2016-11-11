<?php namespace Ecomm;

class OrderItem
{
    /**
     * @var Product
     */
    private $product;
    private $originalPrice;
    private $totalDiscount;
    private $quantity;

    public function __construct(Product $product, $quantity)
    {
        $this->product = $product;
        $this->originalPrice = $product->getPrice();
        $this->setQuantity($quantity);
    }

    public function setTotalDiscount($totalDiscount)
    {
        $this->totalDiscount = $totalDiscount;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getTotalCost()
    {
        return ($this->product->getPrice() * $this->quantity) - $this->totalDiscount;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }
}