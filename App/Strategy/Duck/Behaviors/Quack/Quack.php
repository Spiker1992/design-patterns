<?php

namespace App\Strategy\Duck\Behaviors\Quack;

use App\Strategy\Duck\Behaviors\Quack\Interfaces\QuackInterface;

class Quack implements QuackInterface
{
    public function quack(): string
    {
        return 'quack';
    }
}
