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
    public bool $isFavorite;
    public int $qty = 1;

    private FavoriteService $favoriteService;

    public function boot(FavoriteService $favoriteService): void
    {
        $this->favoriteService = $favoriteService;
    }

    public function mount(Product $product): void
    {
        $this->product = $product;
        $this->isFavorite = $this->favoriteService->isFavorite($this->product->id);
    }

    #[On('delete-favorite')]
    public function deleteFavorite(): void
    {
        $this->isFavorite = $this->favoriteService->isFavorite($this->product->id);
    }

    public function addToFavorite(Product $product): void
    {
        $this->favoriteService->addProduct($product);
        $this->isFavorite = $this->favoriteService->isFavorite($this->product->id);
        $this->dispatch('add-favorite');
    }

    public function qtyPlus(): void
    {
        $this->qty++;
    }

    public function qtyMinus(): void
    {
        if($this->qty > 1) $this->qty--;
    }

    public function render(): View
    {
        return view('livewire.product.product-show');
    }
}
