@php use Illuminate\Support\Facades\Request  @endphp

@props([
    'title' => '',
    'filter' => null
])

<td {{ $attributes->merge([])->class('')}}>
    <div>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <b>{{ $title }}</b>
        </div>
        <div class="d-flex align-items-center">
            @if($filter)
                <input name="{{$filter}}" value="{{ Request::query($filter)}}" class="input-filter"/>
{{--                <i class="fas fa-backspace input-filter-erase" onclick="inputFilterErase(event)"></i>--}}
            @endif
        </div>
    </div>

</td>

@push('styles')
    <style>
        .input-filter {
            outline: none;
            width: 100%;
            border: 1px dashed #0c84ff;
            border-radius: 4px;
        }
        .input-filter:focus {
            width: 100%;
            border: 1px solid #0c84ff;
            border-radius: 8px;
            transition: 0.3s all;
            background-color: #e1f0ff;
        }
        /*.input-filter-erase {*/
        /*    font-size: 22px;*/
        /*    margin-left: 4px;*/
        /*}*/
        /*.input-filter-erase:hover {*/
        /*    cursor: pointer;*/
        /*}*/
    </style>
@endpush

@push('scripts')
{{--    <script>--}}
{{--        function inputFilterErase(event) {--}}
{{--            console.log(event.target);--}}
{{--        }--}}
{{--    </script>--}}
@endpush
