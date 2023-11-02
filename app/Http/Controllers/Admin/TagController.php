<?php

namespace App\Http\Controllers\Admin;

use App\Data\TagData;
use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\ViewModels\Admin\Tag\TagIndexViewModel;
use App\ViewModels\Admin\Tag\TagShowViewModel;

class TagController extends Controller
{
    public function index(TagIndexViewModel $viewModel): TagIndexViewModel
    {
        return $viewModel;
    }

    public function show(Tag $tag): TagShowViewModel
    {
        $data = TagData::from($tag);

        return new TagShowViewModel($data);
    }
}
