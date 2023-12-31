@php
    /** @var $seo \App\Data\SeoData */
@endphp


{{--<link rel="canonical" href="{{ $seo->canonical }}" />--}}

{{--<link rel="prev" href="{{ $seo->prev }}" />--}}
{{--<link rel="next" href="{{ $seo->next }}" />--}}

<meta name="yandex" content="all"/>
<meta name="google" content="all"/>
<meta name="bingbot" content="all"/>
<meta name="slurp" content="all"/>
<meta name="robots" content="all"/>

{{--<meta name="generator" content="{{ $seo->generator }}" />--}}

{{--<meta name="author" content="{{ $seo->author }}" />--}}
{{--<meta name="copyright" lang="{{ $seo->lang }}" content="{{ $seo->company }}" />--}}

{{--<meta name="keywords" content="{{ $seo->keywords }}" />--}}

@isset($seo->description)
    <meta name="description" content="{{ $seo->description }}">
@endisset

<title>{{ $seo->title ?? config('app.name') }}</title>
