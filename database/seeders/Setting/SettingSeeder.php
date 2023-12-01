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
        Setting::create([ 'key' => 'contacts_street', 'value' => '197110, Санкт-Петербург, ул. Большая Разночинная, дом 14, офис 516']);
        Setting::create([ 'key' => 'contacts_house', 'value' => 'Бизнес-центр "Бизнес Депо"']);
        Setting::create([ 'key' => 'contacts_metro', 'value' => 'Ст.М. "Чкаловская"']);
        Setting::create([ 'key' => 'contacts_telephone', 'value' => '+7(911)744-78-88']);
        Setting::create([ 'key' => 'contacts_email', 'value' => 'eleanta@yandex.ru']);
        Setting::create([ 'key' => 'contacts_description', 'value' => 'Заполните форму, и наш сервис свяжется с вами в течение 24 часов.']);
    }
}
