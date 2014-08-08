<?php namespace Ozziest\Sample\Facades;

use Illuminate\Support\Facades\Facade;

class Sample extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() 
    { 
        return 'ozziest.sample'; 
    }

}