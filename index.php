<?php

require_once 'vendor/autoload.php';

use App\Facades\Payment;

$payment = Payment::Paypal();
$payment->setPrice(15000.00);
$payment->setProduct('Macbook Pro');
$pay = $payment->pay();

echo str_repeat("-", 100).PHP_EOL;
if($pay) {
    echo 'Message: '.$pay.PHP_EOL;
    echo 'Product: '.$payment->getProduct().PHP_EOL;
    echo 'Transaction Token: '.$payment->getTransactionToken().PHP_EOL;
    echo 'Transaction Price: R$'.number_format($payment->getPrice(), 2, '.', ',').PHP_EOL;
} else {
    echo 'An error occurred, please try again.'.$pay.PHP_EOL;
}
echo str_repeat("-", 100).PHP_EOL;