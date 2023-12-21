<?php

namespace App\Livewire\Favorite;

use App\Models\Product;
use App\Services\FavoriteService;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class FavoriteAddButton extends Component
{
    public Product $product;
    public bool $isFavorite;

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

    public function addToFavorite(): void
    {
        $this->favoriteService->addProduct($this->product);
        $this->isFavorite = $this->favoriteService->isFavorite($this->product->id);
        $this->dispatch('add-favorite');
    }

    public function render(): View
    {
        return view('livewire.favorite.favorite-add-button');
    }
}
