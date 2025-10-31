<?php

namespace Mario\FlashNotification;

use Illuminate\Support\ServiceProvider;

class FlashNotificationServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton('flash-notification', function () {
            return new NotificationManager();
        });
    }
}
