<?php

namespace App\Orders;

use App\Billing\PaymentGateway;

class OrderDetails
{
    private $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway)
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