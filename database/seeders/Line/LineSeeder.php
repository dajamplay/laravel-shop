<?php

namespace Database\Seeders\Line;

use App\Models\Line;
use Illuminate\Database\Seeder;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Line::create(
            [
                'title' => 'ДОМАШНИЙ УХОД',
            ]
        );
        Line::create(
            [
                'title' => 'ОЧИЩЕНИЕ И ТОНИЗАЦИЯ',
            ]
        );
        Line::create([
                'title' => 'ПИЛИНГИ',
            ]
        );
        Line::create([
                'title' => 'СЫВОРОТКИ И КОНЦЕНТРАТЫ',
            ]
        );
        Line::create([
                'title' => 'КРЕМЫ И ЭМУЛЬСИИ',
            ]
        );
    }
}
