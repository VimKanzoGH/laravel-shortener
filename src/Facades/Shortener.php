<?php

namespace LeadThread\Shortener\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Illuminate\Filesystem\Filesystem
 */
class Shortener extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'shortener';
    }
}