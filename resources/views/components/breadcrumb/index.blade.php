@props([
    'h1' => '',
    'image' => 'assets/images/breadcrumb/bg4.jpg',
    'breadcrumbs' => [],
])

<div
    class="breadcrumb-area breadcrumb-height py-1 mt-4"
    data-bg-image="{{storage($image)}}"
>
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-item">
                    <h1 class="breadcrumb-heading about-title">{{$h1}}</h1>
                    @if(count($breadcrumbs) > 0)
                        <ul>
                            @foreach($breadcrumbs as $breadcrumb)
                                @if(isset($breadcrumb['link']))
                                    <li>
                                        <a href="{{$breadcrumb['link']}}">{{$breadcrumb['title']}}</a>
                                    </li>
                                @else
                                    <li style="color:#aaaaaa;">{{$breadcrumb['title']}}</li>
                                @endif
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
