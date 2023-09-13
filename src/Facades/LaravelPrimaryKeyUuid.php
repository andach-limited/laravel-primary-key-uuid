<?php

namespace Andach\LaravelPrimaryKeyUuid\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Andach\LaravelPrimaryKeyUuid\LaravelPrimaryKeyUuid
 */
class LaravelPrimaryKeyUuid extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Andach\LaravelPrimaryKeyUuid\LaravelPrimaryKeyUuid::class;
    }
}
