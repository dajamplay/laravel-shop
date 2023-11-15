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
            @endif
        </div>
    </div>

</td>

@pushonce('styles')
    <style>
        .input-filter {
            outline: none;
            width: 100%;
            border: 1px dashed #0c84ff;
            border-radius: 6px;
            transition: .3s all;
        }
        .input-filter-not-empty {
            background-color: #e1f0ff;
            border: 1px solid #0c84ff;
        }
        .input-filter:focus {
            border: 1px solid #0c84ff;
        }
    </style>
@endpushonce

@pushonce('scripts')
    <script>

        let inputsFilter = document.querySelectorAll('.input-filter');

        inputsFilter.forEach( (element) => {
            checkInputNotEmptyValue(element.value, element);

            element.addEventListener('input', function (event) {
                checkInputNotEmptyValue(event.target.value, element);
            });
        });

        function checkInputNotEmptyValue(value, element) {
            if(value !== '') {
                element.classList.add('input-filter-not-empty');
            } else {
                element.classList.remove('input-filter-not-empty');
            }
        }

    </script>
@endpushonce
