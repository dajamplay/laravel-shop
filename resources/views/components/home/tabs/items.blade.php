@props([
     'featuredProducts',
     'bestsellerProducts',
     'latestProducts'
])
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
        <x-home.tabs.item :products="$featuredProducts"/>
    </div>
    <div class="tab-pane fade" id="bestseller" role="tabpanel" aria-labelledby="bestseller-tab">
        <x-home.tabs.item :products="$bestsellerProducts"/>
    </div>
    <div class="tab-pane fade" id="latest" role="tabpanel" aria-labelledby="latest-tab">
        <x-home.tabs.item :products="$latestProducts"/>
    </div>
</div>
