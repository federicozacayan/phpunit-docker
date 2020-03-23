<?php

use PHPUnit\Framework\TestCase;
use App\Foo;
use App\Bar;

class FooTest extends TestCase {

    protected function setUp(){
        $this->calculator = new Foo();
    }

    public function testRun() { 
        $this->assertEquals($this->calculator->run(), true);
    }


    /**
     * @dataProvider  addNumbers
     */
    public function testAdd($a, $b, $expected){
        $this->assertEquals($this->calculator->add($a, $b), $expected);
    }

    public function addNumbers(){
        return [
            [5,2,7],
            [1,1,2],
            [-1,3,2]
        ];
    }

    public function testStub()
    {
        $stub = $this->createMock(Bar::class);
        $stub->method('run')
             ->willReturn('bar');
        $this->assertSame('bar', $stub->run());
    }


    public function testExeption(){
        $this->expectException(Exception::class);
        $this->calculator->throwException();
    }

    public function testOnConsecutiveCallsStub()
    {
        $stub = $this->createMock(Bar::class);
        $stub->method('run')
             ->will($this->onConsecutiveCalls('banana','strawberry'));
        $this->assertEquals('banana', $stub->run());
        $this->assertEquals('strawberry', $stub->run());
    }
}