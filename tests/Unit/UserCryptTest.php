<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class UserCryptTest extends TestCase
{
    use RefreshDatabase;


    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $password = 'password';
        $user = factory(User::class)->make([
            'access_token' => $password,
            'access_token_secret' => $password,
        ]);
        $user->save();

        $this->assertEquals($user->access_token, $password);
        $this->assertNotEquals($user->getOriginal('access_token'), $password);
        $this->assertEquals($user->access_token_secret, $password);
        $this->assertNotEquals($user->getOriginal('access_token_secret'), $password);
    }
}
