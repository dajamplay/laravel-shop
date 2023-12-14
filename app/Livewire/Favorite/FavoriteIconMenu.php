<?php

namespace App\Livewire\Favorite;

use App\Models\Product;
use App\Services\FavoriteService;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class FavoriteIconMenu extends Component
{
    public array $favoriteProducts = [];

    private FavoriteService $favoriteProductsService;

    public function boot(FavoriteService $favoriteProductsService): void
    {
        $this->favoriteProductsService = $favoriteProductsService;
        $this->favoriteProducts = $favoriteProductsService->getProducts();
    }

    #[On('add-to-favorite-update-icon')]
    public function updateIcon(): void
    {
        $this->favoriteProducts = $this->favoriteProductsService->getProducts();
    }

    public function render(): View
    {
        return view('livewire.favorite.favorite-icon-menu');
    }
}
