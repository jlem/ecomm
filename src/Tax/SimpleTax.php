<?php namespace Ecomm\Tax;

class SimpleTax
{
    /**
     * @var TaxAPIService
     */
    private $taxApiService;

    /**
     * TaxCalculator constructor.
     * @param TaxAPIService $taxApiService
     */
    public function __construct(TaxAPIService $taxApiService)
    {
        $this->taxApiService = $taxApiService;
    }

    /**
     * @param Order $order
     * @return Order
     */
    public function calculateTax(Order $order)
    {
        // 1. Validate order, throw exception if invalid
        // 2. Obtain whatever data you need from the $order object
        // 3. Apply whatever logic/transformation you need
        // 4. Feed it to tax service and return value

        return $this->taxApiService->getTaxAmount('...'); // pretend this was a real API call and we fed it real data
    }
}