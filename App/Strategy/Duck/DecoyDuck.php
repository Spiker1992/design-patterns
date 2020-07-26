<?php

namespace App\Strategy\Duck;

use App\Strategy\Duck\Behaviors\Fly\FlyNoWay;
use App\Strategy\Duck\Behaviors\Quack\MuteQuack;

class DecoyDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay;
        $this->quackBehavior = new MuteQuack;
    }
}
