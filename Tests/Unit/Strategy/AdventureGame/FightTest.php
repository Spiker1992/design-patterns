<?php
 
namespace Tests\Unit\Strategy\AdventureGame;

use App\Strategy\AdventureGame\Characters\Knight;
use App\Strategy\AdventureGame\Characters\Queen;
use App\Strategy\AdventureGame\Weapons\Bow;
use App\Strategy\AdventureGame\Weapons\Sword;
use Tests\TestCase;

class FightTest extends TestCase
{
    /**
     * @test
     * @group adventure-game
     */
    public function fightWithASword(): void
    {
        $character = new Knight;
        $character->setWeapon(new Sword);

        $this->assertEquals('swinging a sword', $character->fight());
    }
    
    /**
     * @test
     * @group adventure-game
     */
    public function fightWithABow(): void
    {
        $character = new Queen;
        $weapon = new Bow;
        $character->setWeapon($weapon);

        $this->assertEquals('we run out of arrows', $character->fight());

        $ammunitionQuantity = 100;
        $character->weapon->addAmmunition($ammunitionQuantity);

        $this->assertEquals('shooting an arrow with a bow', $character->fight());
        $this->assertEquals(--$ammunitionQuantity, $character->weapon->remainingAmmunition());
    }
}
