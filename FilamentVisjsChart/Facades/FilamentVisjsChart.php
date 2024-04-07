<?php

namespace Cmsedore\FilamentVisjsChart\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cmsedore\FilamentVisjsChart\FilamentVisjsChart
 */
class FilamentVisjsChart extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Cmsedore\FilamentVisjsChart\FilamentVisjsChart::class;
    }
}
