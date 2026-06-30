<?php
/**
 * Tests for ForgeSignal
 */

use PHPUnit\Framework\TestCase;
use Forgesignal\Forgesignal;

class ForgesignalTest extends TestCase {
    private Forgesignal $instance;

    protected function setUp(): void {
        $this->instance = new Forgesignal(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Forgesignal::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
