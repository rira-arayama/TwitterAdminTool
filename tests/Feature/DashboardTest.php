<?php

namespace Tests\Feature;

use App;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function can_view()
    {
        $response = $this->get(route('dashboard'));

        $response->assertStatus(200)->assertSeeText('ログイン');
    }

    /**
     * @test
     */
    public function root_redirect_dashboard()
    {
        $response = $this->get('/');

        $response->assertRedirect(route('dashboard'));
    }
}
