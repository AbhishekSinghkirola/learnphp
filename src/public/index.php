<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\Enums\Status;
use App\PaymentGateway\Paddle\Transaction;

$transaction = new Transaction();
// echo Transaction::STATUS_PAID;
// echo $transaction::STATUS_DECLINED;

echo $transaction::class; // return fully qualified class names

// $transaction->setStaus(Transaction::STATUS_PAID);
// var_dump($transaction);
$transaction->setStaus(Status::PAID);
var_dump($transaction);
