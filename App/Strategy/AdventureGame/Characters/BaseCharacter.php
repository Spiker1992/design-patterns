<?php

namespace App\Strategy\AdventureGame\Characters;

use App\Strategy\AdventureGame\Weapons\Interfaces\WeaponInterface;

abstract class BaseCharacter
{
    public WeaponInterface $weapon;

    public function fight(): string
    {
        return $this->weapon->useWeapon();
    }

    public function setWeapon(WeaponInterface $weapon): void
    {
        $this->weapon = $weapon;
    }
}
