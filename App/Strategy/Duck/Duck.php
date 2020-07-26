<?php

namespace App\Strategy\Duck;

use App\Strategy\Duck\Behaviors\Fly\Interfaces\FlyInterface;
use App\Strategy\Duck\Behaviors\Fly\FlyWithWings;
use App\Strategy\Duck\Behaviors\Quack\Interfaces\QuackInterface;
use App\Strategy\Duck\Behaviors\Quack\Quack;

abstract class Duck
{
    protected FlyInterface $flyBehavior;
    protected QuackInterface $quackBehavior;

    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings;
        $this->quackBehavior = new Quack;
    }

    public function display(): string
    {
        $className = get_class();

        return "I am a {$className}";
    }

    public function swim(): string
    {
        return 'I can swim';
    }

    public function quack(): string
    {
        return $this->quackBehavior->quack();
    }

    public function fly(): string
    {
        return $this->flyBehavior->fly();
    }

    public function setFlyBehavior(FlyInterface $flyBehavior): void
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackInterface $quackBehavior): void
    {
        $this->quackBehavior = $quackBehavior;
    }
}
