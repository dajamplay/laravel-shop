@props([
    'h1' => 'Магазин профессиональной косметики',
    'image' => 'assets/images/breadcrumb/bg3.jpg',
    'breadcrumbs' => [],
])

<div class="breadcrumb-area breadcrumb-height mt-30" data-bg-image="{{storage($image)}}">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-12">
                <div class="breadcrumb-item">
                    <h1 class="breadcrumb-heading">{{$h1}}</h1>
                    @if(count($breadcrumbs) > 0)
                        <ul>
                            @foreach($breadcrumbs as $breadcrumb)
                                @if(isset($breadcrumb['link']))
                                    <li>
                                        <a href="{{$breadcrumb['link']}}">{{$breadcrumb['title']}}</a>
                                    </li>
                                @else
                                    <li class="">{{$breadcrumb['title']}}</li>
                                @endif
                            @endforeach
                        </ul>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
