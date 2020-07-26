<?php

namespace App\Strategy\AdventureGame\Weapons;

class Sword extends BaseWeapon
{
    public function useWeapon(): string
    {
        return 'swinging a sword';
    }
}
