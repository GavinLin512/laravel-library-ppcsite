<?php
namespace Ppcsite\ViewComponent\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ppcsite\ViewComponent\ViewComponent
 */
class ViewComponent extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     */
    protected static function getFacadeAccessor():string
    {
        return 'packages-view-component';
    }
}
