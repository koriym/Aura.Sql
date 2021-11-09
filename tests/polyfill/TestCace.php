<?php

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected function setUp(): void
    {
        if (method_exists($this, '_setUp')) {
            $this->_setUp();
        }
    }

    protected function setExpectedException($e)
    {
        $this->expectException($e);
    }

    public static function assertContains($needle, $haystack, string $message = ''): void
    {
        if (is_string($haystack)) {
            self::assertStringContainsString($needle, $haystack, $message);

            return;
        }
        parent::assertContains($needle, $haystack, $message);
    }
}
