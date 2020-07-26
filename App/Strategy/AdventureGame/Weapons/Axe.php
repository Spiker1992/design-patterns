<?php

namespace App\Strategy\AdventureGame\Weapons;

class Axe extends BaseWeapon
{
    public function useWeapon(): string
    {
        return 'chopping with an axe';
    }
}
