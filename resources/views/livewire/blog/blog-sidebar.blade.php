<div class="sidebar-area">

    <!-- Search start-->
    <div class="widgets-searchbox">
        <form id="widgets-searchbox">
            <input
                wire:model.live.debounce.500ms="filter_title"
                id="search"
                class="input-field"
                type="text"
                placeholder="{{__('Поиск')}}">
        </form>
    </div>
    <!-- Search end-->

    <!-- Search widgets start-->
    <div class="widgets-area mb-30">
        <div class="widgets-item">
            <h2 class="widgets-title mb-4">{{__('Р')}}<span>{{__('убрики')}}</span></h2>
        </div>
    </div>
    <!-- Search widgets end-->

</div>
