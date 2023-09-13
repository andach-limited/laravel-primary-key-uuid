<?php

namespace Andach\LaravelPrimaryKeyUuid\Tests;

use Andach\LaravelPrimaryKeyUuid\Traits\PrimaryKeyUUID;

class PrimaryKeyUUIDTest extends TestCase
{
    public function testGetIncrementing()
    {
        $mock = $this->getMockForTrait(PrimaryKeyUUID::class);

        $this->assertFalse($mock->getIncrementing());
    }

    public function testGetKeyType()
    {
        $mock = $this->getMockForTrait(PrimaryKeyUUID::class);

        $this->assertEquals('string', $mock->getKeyType());
    }
}
