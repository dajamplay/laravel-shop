<?php

namespace App\Services;

class SliderService
{
    public function getPositionOptions(): array
    {
        return [
            (object)['id' => 'left', 'title' => 'Слева'],
            (object)['id' => 'right', 'title' => 'Справа'],
        ];
    }

    public function getSliderOptions(): array
    {
        return [
            (object)['id' => 1, 'title' => 'Главная страница']
        ];
    }
}
