<?php

declare(strict_types=1);

namespace Otis22\ClearDb;

use PHPUnit\Framework\TestCase;

class CredentialTest extends TestCase
{
    public function testHost(): void
    {
        $this->assertEquals(
            'host',
            (new Credential(new ParsedUrl('mysql://user:pass@host/dbname?reconnect=true')))->host()
        );
    }

    public function testPass(): void
    {
        $this->assertEquals(
            'pass',
            (new Credential(new ParsedUrl('mysql://user:pass@host/dbname?reconnect=true')))->pass()
        );
    }

    public function testDriver(): void
    {
        $this->assertEquals(
            'mysql',
            (new Credential(new ParsedUrl('mysql://user:pass@host/dbname?reconnect=true')))->driver()
        );
    }

    public function testDb(): void
    {
        $this->assertEquals(
            'dbname',
            (new Credential(new ParsedUrl('mysql://user:pass@host/dbname?reconnect=true')))->db()
        );
    }

    public function testUser(): void
    {
        $this->assertEquals(
            'user',
            (new Credential(new ParsedUrl('mysql://user:pass@host/dbname?reconnect=true')))->user()
        );
    }
}
