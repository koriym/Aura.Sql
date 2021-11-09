<?php
class TestCase extends \PHPUnit\Framework\TestCase
{
    protected function setUp()
    {
        if (method_exists($this, '_setUp')) {
            $this->_setUp();
        }
    }
}
