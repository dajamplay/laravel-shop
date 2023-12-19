<?php

namespace App\Livewire\Product;

use App\Models\Product;
use App\Services\FavoriteService;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class ProductShow extends Component
{
    public Product $product;

    public array $favoriteProducts;

    public int $qty = 1;

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
        return view('livewire.product.product-show');
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

    public function qtyPlus(): void
    {
        $this->qty++;
    }

    public function qtyMinus(): void
    {
        if($this->qty > 1) $this->qty--;
    }
}
