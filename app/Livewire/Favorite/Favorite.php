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

    private FavoriteService $service;

    public function boot(FavoriteService $service): void
    {
        $this->service = $service;
        $this->favoriteProducts = $service->getProducts();
    }

    #[On('add-to-favorite')]
    public function addProduct(Product $product): void
    {
        $this->service->addProduct($product);
        $this->favoriteProducts = $this->service->getProducts();
        $this->updateIcons();
    }

    public function render(): View
    {
        return view('livewire.favorite.favorite');
    }

    public function updateIcons(): void
    {
        $this->dispatch('add-to-favorite-update-icon');
    }
}
