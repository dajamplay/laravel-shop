@props([
    'title' => '',
    'content' => '',
    'image' => '',
    'slug' => '',
    'updated_at' => '',
    'author' => '',
])

<div class="swiper-slide">
    <div class="blog-item">
        <div class="blog-content">
            <div class="blog-meta">
                <ul>
                    <li class="author">
                        <a href="#">Автор: {{$author}}</a>
                    </li>
                    <li class="date">{{$updated_at}}</li>
                </ul>
            </div>
            <h2 class="title">
                <a href="{{$slug}}">{{$title}}</a>
            </h2>
            <p class="short-desc mb-7">{!!htmlspecialchars_decode($content)!!}</p>
        </div>
        <div class="blog-img img-hover-effect">
            <a href="{{$slug}}">
                <img class="img-full" src="{{storage($image)}}" alt="{{$title}}">
            </a>
            <div class="inner-btn-wrap">
                <a class="inner-btn" href="{{$slug}}">
                    <i class="pe-7s-link"></i>
                </a>
            </div>
        </div>
    </div>
</div>
