<?php
 
namespace Tests\Feature\Strategy\Duck;

use App\Strategy\Duck\Behaviors\Fly\FlyRocketPowered;
use App\Strategy\Duck\DecoyDuck;
use App\Strategy\Duck\MallardDuck;
use Tests\TestCase;

class DuckSimulatorTest extends TestCase
{
    /**
     * @test
     * @group strategy-duck
     */
    public function simulateDefaultBehavior(): void
    {
        $duck = new MallardDuck;

        $this->assertEquals('quack', $duck->quack());
        $this->assertEquals('fly with wings', $duck->fly());
    }
    
    /**
     * @test
     * @group strategy-duck
     */
    public function changeBehavoirAtRunTime(): void
    {
        $duck = new DecoyDuck;

        $this->assertEquals('mute', $duck->quack());
        $this->assertEquals('can\'t fly', $duck->fly());

        $duck->setFlyBehavior(new FlyRocketPowered);
        
        $this->assertEquals('I am powered by a rocket', $duck->fly());
    }
}
