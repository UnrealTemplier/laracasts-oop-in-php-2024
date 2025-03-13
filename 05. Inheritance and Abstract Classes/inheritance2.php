<?php

namespace Lesson05\Inheritance2;

use Couchbase\TermRangeSearchQuery;

class Notification
{
    public function __construct(public string $message) {}

    public function send(): void
    {
        echo "Base class (Notification): {$this->message}\n";
    }
}

class EmailNotification extends Notification
{
    public function send(): void
    {
        echo "Child class (EmailNotification): {$this->message}\n";
    }
}

class DesktopNotification extends Notification
{
    public function send(): void
    {
        echo "Child class (DesktopNotification): {$this->message}\n";
    }
}

$notification = new Notification('Choose life!');
$notification->send();

$notification = new EmailNotification('I chose not to choose life.');
$notification->send();

$notification = new DesktopNotification('I chose something else.');
$notification->send();
