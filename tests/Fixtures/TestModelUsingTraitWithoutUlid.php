<?php

// Copyright (C) 2022 Ivan Stasiuk <ivan@stasi.uk>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\UidKeys\Tests\Fixtures;

use Illuminate\Database\Eloquent\Model;
use BrokeYourBike\UidKeys\Database\Eloquent\Ulid;

class TestModelUsingTraitWithoutUlid extends Model
{
    use Ulid;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'test_model_without_ulids';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Indicates if the IDs are ULIDs.
     *
     * @return bool
     */
    protected function keyIsUlid(): bool
    {
        return false;
    }
}
