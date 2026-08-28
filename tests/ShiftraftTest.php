<?php
/**
 * Tests for ShiftRaft
 */

use PHPUnit\Framework\TestCase;
use Shiftraft\Shiftraft;

class ShiftraftTest extends TestCase {
    private Shiftraft $instance;

    protected function setUp(): void {
        $this->instance = new Shiftraft(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Shiftraft::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
