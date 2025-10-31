<?php

use Mario\FlashNotification\NotificationManager;

if (! function_exists('notification')) {
    /**
     * Get the flash notification manager instance.
     *
     * @return \Mario\FlashNotification\NotificationManager
     */
    function notification(): NotificationManager
    {
        return app(NotificationManager::class);
    }
}
