<?php

namespace Mario\FlashNotification\Facades;

use Illuminate\Support\Facades\Facade;

class FlashNotification extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'flash-notification';
    }
}
