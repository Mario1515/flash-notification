<?php

namespace Mario\FlashNotification;

use Carbon\Carbon;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class NotificationManager
{
    public const DEFAULT_DURATION = 4000;

    public function success(string $message, ?string $title = null, int $duration = self::DEFAULT_DURATION): void
    {
        $this->push('success', $message, $title, $duration);
    }

    public function error(string $message, ?string $title = null, int $duration = self::DEFAULT_DURATION): void
    {
        $this->push('error', $message, $title, $duration);
    }

    public function info(string $message, ?string $title = null, int $duration = self::DEFAULT_DURATION): void
    {
        $this->push('info', $message, $title, $duration);
    }

    public function warning(string $message, ?string $title = null, int $duration = self::DEFAULT_DURATION): void
    {
        $this->push('warning', $message, $title, $duration);
    }

    public function custom(string $type, string $message, ?string $title = null, int $duration = self::DEFAULT_DURATION): void
    {
        $this->push($type, $message, $title, $duration);
    }

    protected function push(string $type, string $message, ?string $title = null, int $duration = self::DEFAULT_DURATION): void
    {
        $notifications = Session::get('notifications', []);

        $notifications[] = [
            'id'       => (string) Str::uuid(),
            'type'     => $type,
            'title'    => $title,
            'message'  => $message,
            'duration' => $duration,
            'time'     => Carbon::now()->toISOString(),
        ];

        Session::flash('notifications', Arr::wrap($notifications));
    }
}
