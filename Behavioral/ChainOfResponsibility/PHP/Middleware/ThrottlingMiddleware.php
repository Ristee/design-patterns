<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility\PHP\Middleware;

class ThrottlingMiddleware extends Middleware
{
    private $requestPerMinute;

    private $request;

    private $currentTime;

    public function __construct(int $requestPerMinute)
    {
        $this->requestPerMinute = $requestPerMinute;
        $this->currentTime = time();
    }

    public function check(string $email, string $password): bool
    {
        if (!isset($this->request[$email])) {
            $this->request[$email] = 0;
        }

        if (time() > $this->currentTime + 60) {
            $this->request[$email] = 0;
            $this->currentTime = time();
        }

        $this->request[$email]++;

        if ($this->request[$email] > $this->requestPerMinute) {
            return false;
        }

        return parent::check($email, $password);
    }
}