<?php

namespace SeatloN\PUBG;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SeatloN\PUBG\Skeleton\SkeletonClass
 */
class PUBGFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pubg';
    }
}
