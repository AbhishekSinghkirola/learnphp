<?php

declare(strict_types=1);
require __DIR__ . '/../vendor/autoload.php';

use App\DB;
// use App\PaymentGateway\Paddle\Transaction;

// $transaction = new Transaction(200, "Transaction 1");
// var_dump(Transaction::getCount());

// Singleton Basic Example - no matter how many time we call that insatnce it only created once
$db = DB::getInstance([]);
$db = DB::getInstance([]);
$db = DB::getInstance([]);
$db = DB::getInstance([]);
