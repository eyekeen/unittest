<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Amount;

$amount = new Amount();

dd($amount->amountForOneItem(100));
