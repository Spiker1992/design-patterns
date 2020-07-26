<?php

namespace App\Strategy\Duck;

use App\Strategy\Duck\Behaviors\Fly\FlyNoWay;
use App\Strategy\Duck\Behaviors\Quack\Squeak;

class RubberDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay;
        $this->quackBehavior = new Squeak;
    }
}
