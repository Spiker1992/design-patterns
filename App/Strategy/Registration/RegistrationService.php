<?php

namespace App\Strategy\Registration;

use App\Strategy\Registration\Strategy\{
    DefaultRegistration,
    FacebookRegistration,
    GoogleRegistration,
};
use Exception;

class RegistrationService
{
    const STRATEGY = [
        'default' => DefaultRegistration::class,
        'facebook' => FacebookRegistration::class,
        'google' => GoogleRegistration::class,
    ];

    public function handle(string $strategy, array $data): string 
    {
        if (!isset(static::STRATEGY[$strategy])) {
            throw new Exception("Strategy '{$strategy}' is not supported");
        }

        $class = static::STRATEGY[$strategy];
        
        return (new $class)->handle($data);
    } 
}