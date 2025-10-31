<?php

namespace Mario\FlashNotification;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class NotificationManager
{
    public const DEFAULT_DURATION = 4000;

    protected array $buffer = [];

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
        $this->buffer[] = [
            'id'       => Str::uuid()->toString(),
            'type'     => $type,
            'title'    => $title,
            'message'  => $message,
            'duration' => $duration,
        ];

        Session::flash('notifications', $this->buffer);
    }
}
