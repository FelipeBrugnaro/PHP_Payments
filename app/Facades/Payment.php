<?php
namespace App\Facades;

class Payment {
    public static function __callStatic($method, $arguments)
    {
        $paymentManager = new PaymentManager();
        $method = $paymentManager->payMethods()[strtolower($method)];
        return $method;
    }
}