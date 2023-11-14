@props([
    'title' => null,
    'content' => null,
    'image' => null,
])

<div class="swiper-slide testimonial-item">
    <div {{ $attributes->merge([])->class(['user-info mb-3']) }}>
        <div class="user-shape-wrap">
            <div class="user-img">
                <img src="{{storage($image)}}" alt="{{$title ?? 'ФИО'}}" width="80" height="80" class="rounded-circle">
            </div>
        </div>
        <div class="user-content text-charcoal">
            <h4 class="user-name mb-1">{{$title ?? 'Имя скрыто'}}</h4>
            <span class="user-occupation">{{__('Клиент')}}</span>
        </div>
    </div>
    <p class="user-comment mb-6">{{$content ?? 'Отличный магазин.'}}</p>
</div>

