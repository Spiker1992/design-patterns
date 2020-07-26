<?php

namespace App\Strategy\AdventureGame\Weapons;
 
use App\Strategy\AdventureGame\Weapons\Interfaces\WeaponInterface;

abstract class BaseWeapon implements WeaponInterface
{
    abstract public function useWeapon(): string;
}
