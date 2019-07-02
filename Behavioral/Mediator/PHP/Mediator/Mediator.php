<?php

namespace DesignPatterns\Behavioral\Mediator\PHP\Mediator;

interface Mediator
{
    public function notify(object $sender, string $event): string ;
}