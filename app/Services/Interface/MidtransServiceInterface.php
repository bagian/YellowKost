<?php

namespace App\Services\Interface;

interface MidtransServiceInterface
{
    public function processCheckout(array $data): array;
}