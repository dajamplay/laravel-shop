<?php

namespace Database\Seeders\Slider;

use App\Models\Slide;
use Illuminate\Database\Seeder;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slide::create(
            [
                'sale' => '65% скидка',
                'title' => 'Rosa graf',
                'content' => 'Rosa graf - это 100% натуральная косметика.',
                'image' => 'tmp/slider/1-1.jpg',
                'position' => 'left',
                'link' => '#',
            ]
        );
        Slide::create(
            [
                'sale' => '45% скидка',
                'title' => 'Circadia',
                'content' => 'Circadia - это 100% натуральная косметика.',
                'image' => 'tmp/slider/1-3.jpg',
                'position' => 'right',
                'link' => '#',
            ]
        );
        Slide::create(
            [
                'sale' => '55% скидка',
                'title' => 'Oxygen',
                'content' => 'Oxygen - это 100% натуральная косметика.',
                'image' => 'tmp/slider/1-2.jpg',
                'position' => 'left',
                'link' => '#',
            ]
        );
    }
}
