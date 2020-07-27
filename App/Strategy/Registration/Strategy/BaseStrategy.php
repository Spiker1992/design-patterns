<?php

namespace App\Strategy\Registration\Strategy;

use App\Strategy\Registration\Strategy\Interfaces\RegisterInterface;

abstract class BaseStrategy implements RegisterInterface
{
    protected string $strategyName;

    public function handle(): string 
    {
        return $this->strategyName;
    }
}
