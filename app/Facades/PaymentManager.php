<?php
namespace App\Facades;

use App\Payments\Paypal;
use App\Payments\Pagseguro;

class PaymentManager
{
    public function payMethods()
    {
       return [
           'paypal' => new Paypal(),
           'pagseguro' => new Pagseguro()
       ];
    }
}