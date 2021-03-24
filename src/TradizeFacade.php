<?php

namespace Horaceho\Tradize;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Horaceho\Tradize\Skeleton\SkeletonClass
 */
class TradizeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tradize';
    }
}
