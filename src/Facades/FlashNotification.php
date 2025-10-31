<?php

namespace Mario\FlashNotification\Facades;

use Illuminate\Support\Facades\Facade;
/**
 * @method static void success(string $message, string|null $title = null, int $duration = 3000)
 * @method static void error(string $message, string|null $title = null, int $duration = 3000)
 * @method static void warning(string $message, string|null $title = null, int $duration = 3000)
 * @method static void info(string $message, string|null $title = null, int $duration = 3000)
 * @method static void add(string $type, string $message, string|null $title = null, int $duration = 3000)
 * @method static array all()
 * @method static void clear()
 *
 * @see \Mario\FlashNotification\NotificationManager
 */
class FlashNotification extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'flash-notification';
    }
}
