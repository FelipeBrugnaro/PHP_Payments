<?php
namespace App\Contracts;
interface PaymentInterface {
    public function pay();
    public function setPrice($price);
    public function setProduct($product);
    public function setTransactionToken($token);
    public function getTransactionToken();
}