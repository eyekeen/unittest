<?php

namespace App;

class Name {

    public function prepare($name): string|bool {
        return is_string($name) 
            ? ucfirst(strtolower(trim($name))) 
            : false;
    }
}
