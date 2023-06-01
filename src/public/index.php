<?php

declare(strict_types=1);
require __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;

$transaction = new Transaction(25);

// $transaction->process();

// Accessing Private Properties
$transaction->copyFrom(new Transaction(100));
