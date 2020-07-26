<?php

namespace App\Strategy\Duck\Behaviors\Quack;

use App\Strategy\Duck\Behaviors\Quack\Interfaces\QuackInterface;

class Squeak implements QuackInterface
{
    public function quack(): string
    {
        return 'squeak';
    }
}
