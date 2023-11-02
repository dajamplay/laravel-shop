<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\User;
use Database\Seeders\Brand\BrandSeeder;
use Database\Seeders\Line\LineSeeder;
use Database\Seeders\Tag\TagSeeder;
use Database\Seeders\User\SuperAdminSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SuperAdminSeeder::class,
            BrandSeeder::class,
            TagSeeder::class,
            LineSeeder::class,
        ]);

        User::factory()->count(100)->create();

        Product::factory()->count(100)->create();
    }
}
