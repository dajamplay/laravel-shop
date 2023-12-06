<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Product;
use App\Models\User;
use Database\Seeders\Brand\BrandSeeder;
use Database\Seeders\Feedback\FeedbackSeeder;
use Database\Seeders\Line\LineSeeder;
use Database\Seeders\Role\RoleSeeder;
use Database\Seeders\Setting\SettingSeeder;
use Database\Seeders\Slider\SlideSeeder;
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
            RoleSeeder::class,
            SuperAdminSeeder::class,
            BrandSeeder::class,
            TagSeeder::class,
            LineSeeder::class,
            FeedbackSeeder::class,
            SlideSeeder::class,
            SettingSeeder::class,
        ]);

        User::factory()->count(100)->create();

        Product::factory()->count(200)->create();

        Product::all()->each( function (Product $product) {
            $product->tags()->attach([rand(1,2),rand(3,4), 5]);
        });

        Post::factory()->count(50)->create();

    }
}
