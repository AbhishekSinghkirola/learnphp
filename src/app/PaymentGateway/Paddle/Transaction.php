<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;
use DateTime;
use App\Notification\Email;
use App\PaymentGateway\Paddle\Transaction as PaddleTransaction;

class Transaction
{


    private string $status;

    public function __construct()
    {
        // var_dump(Transaction::STATUS_PENDING);
        var_dump(Status::PENDING);
        $this->setStaus(Status::PENDING);
    }

    public function setStaus(string $status): self
    {
        if (!isset(Status::ALL_STATUSES[$status])) {
            throw new \InvalidArgumentException('Invalid status');
        }
        $this->status = $status;
        return $this;
    }
}
