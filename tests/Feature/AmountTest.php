<?php

// Need write code which can testing

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;
use App\Amount;
use App\File;
use App\Items;

class AmountTest extends TestCase {

    /**
     * 
     * @var Amount
     * 
     */
    protected Amount $amount;
    
    /**
     * 
     * @var MockObject|File
     * 
     */
    protected MockObject|File $file;
    
    /**
     * 
     * @var MockObject|Items
     * 
     */
    protected MockObject|Items $items;

    public function setUp(): void {
        $this->file = $this->createMock(File::class);
        $this->items = $this->createMock(Items::class);

//        $this->file->method('get')->willReturn('test');
        $this->items->method('count')->willReturn(10);
        
        $this->amount = new Amount($this->file, $this->items);
    }

    public function test_amountForItem_method(): void {
        $this->assertEquals(10, $this->amount->amountForOneItem(100));
        $this->assertEquals(20, $this->amount->amountForOneItem(200));
        $this->assertEquals(50, $this->amount->amountForOneItem(500));
        $this->assertIsFloat(12.3, $this->amount->amountForOneItem(123));
    }
}
