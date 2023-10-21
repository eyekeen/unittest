<?php

namespace App;

class Amount {

    protected File $file;
    protected Items $items;

    public function __construct(File $file, Items $items) {
        $this->file = $file;
        $this->items = $items;
    }

    public function amountForOneItem(float|int $amount): float|int {

        $ids = $this->file->get(__DIR__ . '/../storage/ids');

        $itemsCount = $this->items->count($ids);

        $finalAmount = $amount / $itemsCount;

        return number_format($finalAmount, 2, '.', '');
    }
}
