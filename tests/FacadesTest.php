<?php

declare(strict_types=1);

namespace Otis22\ClearDb;

use PHPUnit\Framework\TestCase;
use function putenv;

class FacadesTest extends TestCase
{
    public function setUp(): void
    {
        putenv('CLEARDB_DATABASE_URL=mysql://user:pass@host/dbname?reconnect=true');
    }

    public function testCredential(): void
    {
        $this->assertEquals('mysql', credential()->driver());
    }

    public function testPhinx(): void
    {
        $this->assertArrayHasKey('adapter', phinx()->asArray());
    }
}
