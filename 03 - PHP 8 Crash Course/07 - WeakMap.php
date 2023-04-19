<?php

interface Event {}

class SomeEvent implements Event {}
class AnotherEvent implements Event {}

class Dispatcher
{
    protected WeakMap $dispatchCount;

    public function __construct()
    {
        $this->dispatchCount = new WeakMap();
    }

    public function dispatch(Event $event)
    {
        $this->incrementDispatches($event);

        // dispatch the event
    }

    protected function incrementDispatches(Event $event): void
    {
        $this->dispatchCount[$event] ??= 0;
        $this->dispatchCount[$event]++;
    }
}

$dispatcher = new Dispatcher();

$event = new SomeEvent();
$dispatcher->dispatch($event);
$dispatcher->dispatch($event);
$dispatcher->dispatch($event);

$anotherEvent = new AnotherEvent();
$dispatcher->dispatch($anotherEvent);
$dispatcher->dispatch($anotherEvent);

var_dump($dispatcher);