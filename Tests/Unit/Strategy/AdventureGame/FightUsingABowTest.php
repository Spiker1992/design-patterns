<?php
 
namespace Tests\Unit\Strategy\AdventureGame;

use App\Strategy\AdventureGame\Characters\Queen;
use App\Strategy\AdventureGame\Weapons\Bow;
use Tests\TestCase;

class FightUsingABowTest extends TestCase
{
    /**
     * @test
     * @group adventure-game
     */
    public function noArrows(): void
    {
        $character = new Queen;
        $weapon = new Bow;
        $character->setWeapon($weapon);

        $this->assertEquals('we run out of arrows', $character->fight());
    }

    /**
     * @test
     * @group adventure-game
     */
    public function withArrows(): void 
    {
        $character = new Queen;
        $weapon = new Bow;
        $ammunitionQuantity = 100;
        $weapon->addAmmunition($ammunitionQuantity);
        $character->setWeapon($weapon);

        $this->assertEquals('shooting an arrow with a bow', $character->fight());

        $weapon = $character->getWeapon();
        $this->assertEquals(--$ammunitionQuantity, $weapon->remainingAmmunition());
    }
}
