<?php


namespace App;


class Items {
    public function count(string $ids): int {
        $items = explode(PHP_EOL, $ids);
        
        return count($items);
    }
}
