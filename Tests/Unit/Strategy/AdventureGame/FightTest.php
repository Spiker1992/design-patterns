<?php
 
namespace Tests\Unit\Strategy\AdventureGame;

use App\Strategy\AdventureGame\Characters\Knight;
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
}
