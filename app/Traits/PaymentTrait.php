<?php
namespace App\Traits;

trait PaymentTrait {
    private $price;
    private $product;
    private $transaction_token;

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setProduct($product){
        $this->product = $product;
    }

    public function getProduct(){
        return $this->product;
    }

    public function getTransactionToken()
    {
        return $this->transaction_token;
    }

    public function setTransactionToken($token){
        $this->transaction_token = $token;
    }    
}