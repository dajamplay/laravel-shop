<?php

namespace App\ViewModels\Admin\Message;

use App\Models\Message;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\ViewModels\ViewModel;

class MessageIndexViewModel extends ViewModel
{
    const PER_PAGE = 10;

    public function __construct(){}

    public function messages(): LengthAwarePaginator
    {
        return Message::query()->orderBy('created_at', 'DESC')->paginate(self::PER_PAGE);
    }
}
