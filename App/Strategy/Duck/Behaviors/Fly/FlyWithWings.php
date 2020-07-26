<?php

namespace App\Strategy\Duck\Behaviors\Fly;

use App\Strategy\Duck\Behaviors\Fly\Interfaces\FlyInterface;

class FlyWithWings implements FlyInterface
{
    public function fly(): string
    {
        return 'fly with wings';
    }
}
