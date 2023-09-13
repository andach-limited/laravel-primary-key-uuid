<?php

namespace Andach\LaravelPrimaryKeyUuid\Tests\Models;

use Andach\LaravelPrimaryKeyUuid\Traits\PrimaryKeyUUID;
use Illuminate\Database\Eloquent\Model;

class DummyModel extends Model
{
    use PrimaryKeyUUID;
}
