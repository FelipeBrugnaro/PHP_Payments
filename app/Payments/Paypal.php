<?php
namespace App\Payments;

use App\Contracts\PaymentInterface;
use App\Traits\PaymentTrait;
use Exception;

class Paypal implements PaymentInterface
{

    use PaymentTrait;
    public function pay() : string
    {
        $response = $this->sendToServer();

        if($response['status'] !== 200) {
            return false;
        }
        
        $this->setTransactionToken($response['data']['transaction_token']);
        return $response['message'];
    }

    public function sendToServer() : array
    {
        $server_response = [
            'status' => 200,
            'success' => true,
            'message' => 'Payment successfull',
            'data' => [
                'transaction_token' => 'paypal_transaction_token-'.rand(100000, 999999),
            ]
        ];

        return $server_response;
    }
}