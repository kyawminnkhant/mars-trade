<?php

namespace App\Helpers;

use App\Models\Wallet;

class UUIDGenerator
{
    public static function accountNumberGenerate(): int
    {
        $numbers = mt_rand(1000000000000000, 9999999999999999);

        if (Wallet::where('address', $numbers)->exists()) {
            self::accountNumberGenerate();
        }

        return $numbers;
    }
}
