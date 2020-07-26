<?php

namespace App\Strategy\Duck\Behaviors\Quack;

use App\Strategy\Duck\Behaviors\Quack\Interfaces\QuackInterface;

class MuteQuack implements QuackInterface
{
    public function quack(): string
    {
        return 'mute';
    }
}
