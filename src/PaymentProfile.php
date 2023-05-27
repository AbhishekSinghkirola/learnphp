<?php

declare(strict_types=1);

class PaymentProfile
{
    public int $id = 1;

    public function __construct()
    {
        $this->id = rand();
    }
}
