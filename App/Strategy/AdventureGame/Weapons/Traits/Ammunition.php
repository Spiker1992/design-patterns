<?php

namespace App\Strategy\AdventureGame\Weapons\Traits;

trait Ammunition
{
    protected int $quantity = 0;

    public function hasAmmunition(): bool 
    {
        return $this->quantity;
    }

    public function addAmmunition(int $quantity): void 
    {
        $this->quantity += $quantity;
    }

    public function removeAmmunition(int $quantity = 1): void 
    {
        $this->quantity -= $quantity;
    }

    public function remainingAmmunition(): int 
    {
        return $this->quantity;
    }
}
