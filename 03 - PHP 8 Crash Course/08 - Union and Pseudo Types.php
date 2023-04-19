<?php

declare(strict_types=1);

class User
{
    public function cancel(bool|string $immediate = false)
    {
        var_dump($immediate);
    }

    public function cancelNow()
    {
        $this->cancel(true);
    }

    public function cancelOn(string|DateTime $when)
    {
        $this->cancel($when);
    }
}

$joe = new User;

$joe->cancel();
$joe->cancelNow();
$joe->cancelOn('thursday');