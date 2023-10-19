<?php

namespace Database\Seeders\User;

use App\Models\User;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
            'first_name' => 'AdminFirstName',
            'last_name' => 'AdminLastName',
            'registered_at' => fake()->dateTimeThisYear(),
            'birthday' => fake()->dateTimeThisCentury(),
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
            'role' => USER::ROLE_SUPER_ADMIN
        ]);
    }
}
