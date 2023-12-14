<?php

namespace App\Livewire\Catalog;

use App\Models\Product;
use App\Services\FavoriteService;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class CatalogCardProduct extends Component
{
    public Product $product;

    public array $favoriteProducts;

    public function boot(FavoriteService $service): void
    {
        $this->favoriteProducts = $service->getProducts();
    }

    public function mount(Product $product): void
    {
        $this->product = $product;
    }

    public function render(): View
    {
        return view('livewire.catalog.catalog-card-product');
    }

    #[On('update-favorite-products')]
    public function updateFavoriteProducts($favoriteProducts): void
    {
        $this->favoriteProducts = $favoriteProducts;
    }

    public function addToFavorite(Product $product): void
    {
        $this->dispatch('add-to-favorite', $product);
    }
}
