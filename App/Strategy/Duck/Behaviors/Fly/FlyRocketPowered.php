<?php

namespace App\Strategy\Duck\Behaviors\Fly;

use App\Strategy\Duck\Behaviors\Fly\Interfaces\FlyInterface;

class FlyRocketPowered implements FlyInterface
{
    public function fly(): string
    {
        return 'I am powered by a rocket';
    }
}
