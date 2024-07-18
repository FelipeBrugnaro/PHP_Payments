<?php
namespace App\Payments;

use Exception;
use App\Traits\PaymentTrait;
use App\Contracts\PaymentInterface;

class Pagseguro implements PaymentInterface
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
            'status' => 402,
            'error' => true,
            'message' => 'Payment failed',
        ];

        return $server_response;
    }
}