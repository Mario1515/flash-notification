<?php

use Mario\FlashNotification\NotificationManager;

if (! function_exists('notification')) {
    /**
     * Get the Flash Notification Manager instance.
     *
     * This helper provides IDE autocompletion for all available methods.
     *
     * @method static void success(string $message, string|null $title = null, int $duration = 3000)
     * @method static void error(string $message, string|null $title = null, int $duration = 3000)
     * @method static void warning(string $message, string|null $title = null, int $duration = 3000)
     * @method static void info(string $message, string|null $title = null, int $duration = 3000)
     * @method static void add(string $type, string $message, string|null $title = null, int $duration = 3000)
     * @method static array all()
     * @method static void clear()
     *
     * @return \Mario\FlashNotification\NotificationManager
     */
    function notification(): NotificationManager
    {
        return app(NotificationManager::class);
    }
}
