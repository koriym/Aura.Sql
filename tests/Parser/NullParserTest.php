<?php
namespace Aura\Sql\Parser;

class NullParserTest extends \PHPUnit\Framework\TestCase
{
    public function test()
    {
        $parser = new NullParser();
        list ($statement, $values) = $parser->rebuild('foo', ['bar' => 'baz']);
        $this->assertSame('foo', $statement);
        $this->assertSame(['bar' => 'baz'], $values);
    }
}
