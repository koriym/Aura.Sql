<?php
namespace Aura\Sql\Parser;

class SqliteParserTest extends AbstractParserTest
{
    protected function _setUp()
    {
        $this->parser = new SqliteParser();
    }
}
