<a href="#"
   wire:click.prevent="addToFavorite"
   class="single-product-button-fav single-product-btn"
>
    @if($isFavorite)
        <i class="fa fa-heart text-danger" aria-hidden="true" wire:loading.remove></i>
        <i class="fa fa-spinner text-danger" aria-hidden="true" wire:loading></i>
    @else
        <i class="fa fa-heart-o" aria-hidden="true" wire:loading.remove></i>
        <i class="fa fa-spinner" aria-hidden="true" wire:loading></i>
    @endif
</a>
