<?php
 
namespace Tests\Feature\Strategy\Registration;

use App\Strategy\Registration\RegistrationService;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    const STRATEGY = [
        'default',
        'facebook',
        'google',
    ];

    /**
     * @test
     * @group strategy-registration
     */
    public function performRegistration(): void
    {
        foreach(static::STRATEGY as $strategy) {
            $response = (new RegistrationService)->handle($strategy, []);

            $this->assertEquals($strategy, $response);
        }
    }
}
