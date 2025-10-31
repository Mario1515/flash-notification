<?php

namespace Mario\FlashNotification;

use Illuminate\Support\Facades\Session;

class NotificationManager
{
    public function success(string $message): void
    {
        $this->flash('success', $message);
    }

    public function error(string $message): void
    {
        $this->flash('error', $message);
    }

    public function info(string $message): void
    {
        $this->flash('info', $message);
    }

    public function warning(string $message): void
    {
        $this->flash('warning', $message);
    }

    public function custom(string $message, string $type): void
    {
        $this->flash($type, $message);
    }

    protected function flash(string $type, string $message): void
    {
        Session::flash('notification', [
            'type' => $type,
            'message' => $message,
        ]);
    }
}
