<?php

namespace App\Livewire\Favorite;

use App\Services\FavoriteService;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class FavoriteIconMenu extends Component
{
    public int $favoriteProductsCount;

    private FavoriteService $favoriteService;

    public function boot(FavoriteService $favoriteService): void
    {
        $this->favoriteService = $favoriteService;
    }

    public function mount(): void
    {
        $this->favoriteProductsCount = $this->favoriteService->productsCount();
    }

    #[On('delete-favorite')]
    public function deleteFavorite(): void
    {
        $this->favoriteProductsCount = $this->favoriteService->productsCount();
    }

    #[On('add-favorite')]
    public function addFavorite(): void
    {
        $this->favoriteProductsCount = $this->favoriteService->productsCount();
    }

    public function render(): View
    {
        return view('livewire.favorite.favorite-icon-menu');
    }
}
