<?php

namespace developeruz\Analytics;

use Illuminate\Support\Facades\Facade;

/**
 * @see \developeruz\Analytics\Analytics
 */
class AnalyticsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-analytics';
    }
}
