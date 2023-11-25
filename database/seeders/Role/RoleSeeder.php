<?php

namespace Database\Seeders\Role;

use App\Models\Role;
use Illuminate\Database\Seeder;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['id' => 1, 'title' => 'Пользователь']);
        Role::create(['id' => 2, 'title' => 'Косметолог']);
        Role::create(['id' => 6, 'title' => 'Менеджер']);
        Role::create(['id' => 7, 'title' => 'Администратор']);
    }
}
