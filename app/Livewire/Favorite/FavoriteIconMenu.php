<?php

namespace App\Livewire\Favorite;

use App\Services\FavoriteService;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class FavoriteIconMenu extends Component
{
    public array $favoriteProducts = [];

    public function boot(FavoriteService $service): void
    {
        $this->favoriteProducts = $service->getProducts();
    }

    #[On('update-favorite-products')]
    public function updateFavoriteProducts($favoriteProducts): void
    {
        $this->favoriteProducts = $favoriteProducts;
    }

    public function render(): View
    {
        return view('livewire.favorite.favorite-icon-menu');
    }
}
