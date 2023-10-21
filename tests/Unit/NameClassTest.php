<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Name;

class NameClassTest extends TestCase {

    protected Name $service;

    protected function setUp(): void {
        $this->service = new Name();
    }

    public function test_prepare_method_correct_returned_value(): void {

        $this->assertEquals('Tarum', $this->service->prepare('tARUm'), 'Error message');
        $this->assertEquals('Tarum', $this->service->prepare(' tARUm '));
        $this->assertEquals('Tarum', $this->service->prepare('TaRuM '));
        $this->assertEquals('Tarum', $this->service->prepare(null));
    }

    public function test_prepare_method_check_incorrect_name(): void {


        $this->assertFalse($this->service->prepare(true));
        $this->assertFalse($this->service->prepare(false));
        $this->assertFalse($this->service->prepare(null));
    }
}
