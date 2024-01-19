<?php

namespace Lucacalcaterra\FilamentLdap\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lucacalcaterra\FilamentLdap\FilamentLdap
 */
class FilamentLdap extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Lucacalcaterra\FilamentLdap\FilamentLdap::class;
    }
}
