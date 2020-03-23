<?php

use PHPUnit\Framework\TestCase;
use App\Bar;

class BarTest extends TestCase {

    protected function setUp(){
        $this->calculator = new Bar();
    }

    public function testBar() {
        
        $this->assertEquals($this->calculator->run(), true);
    }
}