<?php

namespace App\Strategy\AdventureGame\Weapons;

class Knife extends BaseWeapon
{
    public function useWeapon(): string
    {
        return 'cutting with a knife';
    }
}
