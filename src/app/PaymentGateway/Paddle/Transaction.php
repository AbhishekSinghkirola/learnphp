<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use DateTime;
use App\Notification\Email;
use App\PaymentGateway\Paddle\Transaction as PaddleTransaction;

class Transaction
{
    public function __construct()
    {
        // var_dump(new CustomerProfile);
        // var_dump(new DateTime());
        // var_dump(new Email());

        var_dump(\explode(',', 'hello,world')); // Find in local namespace if not found then go to global namespace
    }
}

function explode($separator, $string)
{
    return 'foo';
}
