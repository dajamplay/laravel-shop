<?php

namespace App\Livewire\Favorite;

use App\Models\Product;
use App\Services\FavoriteService;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class Favorite extends Component
{
    public array $favoriteProducts = [];

    private FavoriteService $favoriteService;

    public function boot(FavoriteService $favoriteService): void
    {
        $this->favoriteService = $favoriteService;
        $this->favoriteProducts = $favoriteService->products();
    }

    #[On('add-favorite')]
    public function addProduct(): void
    {
        $this->refreshFavoriteProducts();
    }

    public function removeProduct(int $id): void
    {
        $this->favoriteService->removeProduct($id);
        $this->refreshFavoriteProducts();
        $this->dispatch('delete-favorite');
    }

    public function clearProducts(): void
    {
        $this->favoriteService->clear();
        $this->refreshFavoriteProducts();
        $this->dispatch('delete-favorite');
    }

    public function refreshFavoriteProducts(): void
    {
        $this->favoriteProducts = $this->favoriteService->products();
    }

    public function render(): View
    {
        return view('livewire.favorite.favorite');
    }
}
