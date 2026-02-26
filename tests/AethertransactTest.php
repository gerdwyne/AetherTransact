<?php
/**
 * Tests for AetherTransact
 */

use PHPUnit\Framework\TestCase;
use Aethertransact\Aethertransact;

class AethertransactTest extends TestCase {
    private Aethertransact $instance;

    protected function setUp(): void {
        $this->instance = new Aethertransact(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Aethertransact::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
