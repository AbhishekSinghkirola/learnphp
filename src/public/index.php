<?php

declare(strict_types=1);

// phpinfo();

/** Classes And Objects */
require "../Transaction.php";

$transaction = new Transaction(100, "Description1");

$transaction->addTax(8)->applyDiscount(10);
$amount = $transaction->getAmount();

// unset($transaction);
var_dump($amount);

var_dump((object) "Abhishek");
