<?php

namespace App\Orders;

use App\Billing\PaymentGatewayContract;

class OrderDetails
{
    private $paymentGateway;

    public function __construct(PaymentGatewayContract $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    //special method which will return all order details

    public function all()
    {
        $this->paymentGateway->setDiscount(500);

        return[
            'name'=>'User',
            'address'=>'Street x, City ABC',
        ];
    }
}