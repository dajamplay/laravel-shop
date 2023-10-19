<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Tests\TestCase;

class AdminRequestTest extends TestCase
{
    public function testGuestNotSeeDashboard(): void
    {
        $this->assertGuest();

        $this->get(route('admin.index'))->assertStatus(302);
    }

    public function testAdminSeeDashboard(): void
    {
        $user = User::factory()->make([
            'email' => 'admin@example123.com',
            'password' => Hash::make('admin'),
            'first_name' => 'AdminFirstName',
            'last_name' => 'AdminLastName',
            'registered_at' => fake()->dateTimeThisYear(),
            'birthday' => fake()->dateTimeThisCentury(),
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
            'role' => 'admin'
        ]);

        $this->actingAs($user, 'web');

        $this->get(route('admin.index'))
            ->assertOk()
            ->assertViewIs('admin.index');
    }
}
