<?php

namespace App\ViewModels\Admin\Tag;

use App\Data\TagData;
use Spatie\ViewModels\ViewModel;

class TagShowViewModel extends ViewModel
{
    protected $view = 'admin.tags.show';

    public function __construct(
        private readonly TagData $data
    ){}

    public function tag(): TagData
    {
        return $this->data;
    }
}
