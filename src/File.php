<?php


namespace App;

class File {
    public function get(string $path = ''): string {
        return file_get_contents($path);
    }
}
