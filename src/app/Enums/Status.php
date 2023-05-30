<?php

declare(strict_types=1);

namespace App\Enums;

class Status
{
    public const PAID = 'paid';
    public const PENDING = 'pending';
    public const DECLINED = 'declined';

    public const ALL_STATUSES = [
        self::PAID => 'paid',
        self::PENDING => 'pending',
        self::DECLINED => 'declined',
    ];
}
