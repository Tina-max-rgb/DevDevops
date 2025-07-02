<?php
namespace DevDevops\Tests;

use DevDevops\Dummy;
use PHPUnit\Framework\TestCase;

class DummyTest extends TestCase {
    public function testHello() {
        $dummy = new Dummy();
        $this->assertEquals("Hello World", $dummy->hello());
    }
}
