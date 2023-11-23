<?php

namespace Database\Seeders\Setting;

use App\Models\Setting;
use Illuminate\Database\Seeder;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([ 'key' => 'shipping1_title', 'value' => 'Быстрая доставка']);
        Setting::create([ 'key' => 'shipping1_description', 'value' => 'Бесплатно от 15000 руб']);
        Setting::create([ 'key' => 'shipping2_title', 'value' => 'Безопасная оплата']);
        Setting::create([ 'key' => 'shipping2_description', 'value' => 'Наличные, банковский перевод']);
        Setting::create([ 'key' => 'shipping3_title', 'value' => 'Лучший сервис']);
        Setting::create([ 'key' => 'shipping3_description', 'value' => 'Сервис, который имеет значение']);
    }
}
