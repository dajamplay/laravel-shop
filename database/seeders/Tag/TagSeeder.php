<?php

namespace Database\Seeders\Tag;

use App\Models\Tag;
use Illuminate\Database\Seeder;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create(
            [
                'title' => 'Для лица',
            ]
        );
        Tag::create(
            [
                'title' => 'Для рук',
            ]
        );
        Tag::create(
            [
                'title' => 'Для глаз',
            ]
        );
        Tag::create(
            [
                'title' => 'Для волос',
            ]
        );
        Tag::create(
            [
                'title' => 'Для тела',
            ]
        );
    }
}
