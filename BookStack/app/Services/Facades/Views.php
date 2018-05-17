<?php namespace BookStack\Services\Facades;

use Illuminate\Support\Facades\Facade;

class Views extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'views';
    }
}
