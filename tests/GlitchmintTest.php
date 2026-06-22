<?php
/**
 * Tests for GlitchMint
 */

use PHPUnit\Framework\TestCase;
use Glitchmint\Glitchmint;

class GlitchmintTest extends TestCase {
    private Glitchmint $instance;

    protected function setUp(): void {
        $this->instance = new Glitchmint(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Glitchmint::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
