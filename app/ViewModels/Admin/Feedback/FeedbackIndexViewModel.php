<?php

namespace App\ViewModels\Admin\Feedback;

use App\Models\Feedback;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\ViewModels\ViewModel;

class FeedbackIndexViewModel extends ViewModel
{
    const PER_PAGE = 10;

    public function __construct(){}

    public function feedbacks(): LengthAwarePaginator
    {
        return Feedback::query()
            ->paginate(self::PER_PAGE);
    }
}
