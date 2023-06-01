<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

class Transaction
{
    // Restric the access of these properties directly (NOTE: You can use setter and getter for access these but it is not advisable do not use them until you have a specific need case for that)
    private float $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function copyFrom(Transaction $transaction): void
    {
        var_dump($transaction->amount, $transaction->sendEmail());
    }

    public function process()
    {
        echo "Processing $" . $this->amount . " transaction";

        $this->generateReceipt();
        $this->sendEmail();
    }

    // Restric the access of these methods directly
    private function generateReceipt()
    {
    }

    private function sendEmail(): bool
    {
        return true;
    }
}
