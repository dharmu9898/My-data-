<?php

namespace Classiebit\Eventmie\Facades;

use Illuminate\Support\Facades\Facade;

class Eventmie extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'eventmie';
    }
}
