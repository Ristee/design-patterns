<?php

namespace DesignPatterns\Structural\Proxy\PHP\AccessProxy;

class Proxy implements Subject
{
    /**
     * @var RealSubject
     */
    private $realSubject;

    public function __construct(RealSubject $realSubject)
    {
        $this->realSubject = $realSubject;
    }

    public function request(): string
    {
        if ($this->checkAccess()) {
            return $this->realSubject->request();
        }

        return "Permission denied";
    }

    private function checkAccess(): bool
    {
        return false;
    }
}