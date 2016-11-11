<?php
use Ecomm\Product;
use Ecomm\Order;
use Ecomm\OrderItem;
use Ecomm\Discount\SimpleDiscount;
use Ecomm\Tax\SimpleTax;
use Ecomm\TaxAPIService;
use Ecomm\TaxCalculator;



///////////////////////////
////// IN CART
///////////////////////////

// Construct your order
$order = new Order();
$order->addItem(new OrderItem(new Product(1, 'foo', 10), 2));
$order->addItem(new OrderItem(new Product(2, 'bar', 20), 1));
$order->addItem(new OrderItem(new Product(3, 'baz', 30), 4));

// Apply any eligible discounts as needed
$order = (new SimpleFlatDiscount(10))->applyTo($order);



///////////////////////////
////// DURING CHECKOUT
///////////////////////////

// Collect payment and shipping info
$order->billing_address_1 = '...';
$order->shipping_address_1 = '...';

// Apply shipping and tax costs
$order = (new SimpleTax(new TaxAPIService('...creds...')))->applyTo($order);
$order = (new ShippingCost(new ShippingAPIService('...creds...')))->applyTo($order);

$order->save();

// Calculate and display all of your totals
echo $order->getSubTotal();
echo $order->getGrandTotal();
// etc...



///////////////////////////
////// ON CONFIRM PURCHASE
//////////////////////////

$paymentGateway = new PaymentGateway('...creds...');
$invoice = $order->makeInvoice();

// Begin DB transaction
$transaction = $paymentGateway->pay($invoice, $paymentDetails);

if ($transaction->failed()) {
    // etc
} else {
    // etc
}