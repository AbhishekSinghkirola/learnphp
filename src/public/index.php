<?php

declare(strict_types=1);

// phpinfo();

/** Classes And Objects */
require '../PaymentProfile.php';
require '../Customer.php';
require '../Transaction.php';

$transaction = new Transaction(100, "Description1");

echo $transaction->getCustomer()?->getPaymentProfile()?->id ?? "Foo";
