<?php

namespace App\Strategy\AdventureGame\Weapons;

use App\Strategy\AdventureGame\Weapons\Traits\Ammunition;

class Bow extends BaseWeapon
{
    use Ammunition; 

    public function useWeapon(): string
    {
        if (!$this->hasAmmunition()) {
            return 'we run out of arrows';
        }

        $this->removeAmmunition(1);

        return 'shooting an arrow with a bow';
    }
}
