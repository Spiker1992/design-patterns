<?php

namespace App\Strategy\Duck\Behaviors\Fly;

use App\Strategy\Duck\Behaviors\Fly\Interfaces\FlyInterface;

class FlyNoWay implements FlyInterface
{
    public function fly(): string
    {
        return 'can\'t fly';
    }
}
