<?php

namespace BrokeYourBike\UidKeys\Tests;

use Illuminate\Support\Str;
use BrokeYourBike\UidKeys\Tests\Fixtures\TestModelUsingTraitWithUuid4;

class ModelUsingTraitWithUuidTest extends TestCase
{
    /** @test */
    public function it_generates_a_uuid4_when_the_id_has_not_been_set(): void
    {
        /** @var \GoldSpecDigital\LaravelEloquentUUID\Tests\Fixtures\TestModelUsingTraitWithUuid4 $testModel */
        $testModel = TestModelUsingTraitWithUuid4::query()->create();

        $this->assertEquals(36, mb_strlen($testModel->id));
    }

    /** @test */
    public function it_uses_the_uuid4_provided_when_id_has_been_set(): void
    {
        $uuid = Str::uuid()->toString();

        /** @var \GoldSpecDigital\LaravelEloquentUUID\Tests\Fixtures\TestModelUsingTraitWithUuid4 $testModel */
        $testModel = TestModelUsingTraitWithUuid4::query()->create([
            'id' => $uuid,
        ]);

        $this->assertEquals($uuid, $testModel->id);
    }
}
