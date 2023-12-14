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

    private FavoriteService $favoriteProductsService;

    public function boot(FavoriteService $favoriteProductsService): void
    {
        $this->favoriteProductsService = $favoriteProductsService;
        $this->favoriteProducts = $this->favoriteProductsService->getProducts();
    }

    public function mount(Product $product): void
    {
        $this->product = $product;
    }

    public function render(): View
    {
        return view('livewire.catalog.catalog-card-product');
    }

    #[On('add-to-favorite-update-icon')]
    public function updateIcon(): void
    {
        $this->favoriteProducts = $this->favoriteProductsService->getProducts();
    }

    public function addToFavorite(Product $product): void
    {
        $this->dispatch('add-to-favorite', $product);
    }
}
