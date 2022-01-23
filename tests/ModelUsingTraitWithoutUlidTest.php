<?php

namespace BrokeYourBike\UidKeys\Tests;

use PDOException;
use BrokeYourBike\UidKeys\Tests\Fixtures\TestModelUsingTraitWithoutUlid;

class ModelUsingTraitWithoutUlidTest extends TestCase
{
    /** @test */
    public function it_does_not_generate_a_uuid4_when_no_id_has_been_set(): void
    {
        $this->expectException(PDOException::class);

        TestModelUsingTraitWithoutUlid::query()->create();
    }
}
