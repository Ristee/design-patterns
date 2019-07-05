<?php

namespace DesignPatterns\Behavioral\Observer\PHP\UserRepository;

class Logger implements \SplObserver
{
    /**
     * @var array
     */
    private $storage = [];

    public function update(\SplSubject $repository, string $event = null, $data = null): void
    {
        $this->storage[] = $event;
    }

    public function getLogs()
    {
        return $this->storage;
    }
}