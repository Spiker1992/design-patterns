<?php

namespace App\Strategy\AdventureGame\Weapons;

class Bow extends BaseWeapon
{
    public function useWeapon(): string
    {
        return 'shooting an arrow with a bow';
    }
}
