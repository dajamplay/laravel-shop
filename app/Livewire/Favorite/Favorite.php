<?php

namespace App\Livewire\Favorite;

use App\Models\Product;
use App\Services\FavoriteService;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class Favorite extends Component
{
    public array $products = [];

    private FavoriteService $service;

    public function boot(FavoriteService $service): void
    {
        $this->service = $service;
        $this->products = $service->getProducts();
    }

    #[On('add-to-favorite')]
    public function addProduct(Product $product): void
    {
        $this->service->addProduct($product);
        $this->products = $this->service->getProducts();
    }

    public function render(): View
    {
        return view('livewire.favorite.favorite');
    }
}
