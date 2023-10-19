@props([
    'model',
    'editButton' => true
])

<div class="card card-primary card-outline">

    <div class="card-body ">

        <div class="text-center">
            <img class="profile-user-img img-fluid img-circle" src="{{ asset('adminlte/img/avatars/avatar4.png') }}"
                 alt="{{__('Аватар пользователя')}}">
        </div>

        <h3 class="profile-username text-center">{{ $model->fullName }}</h3>

        <p class="text-muted text-center">{{ $model->email }}</p>

        @if($editButton)
            <div class="text-center">

                <x-ui.button
                    text="{{ __('Редактировать') }}"
                    href="{{ route('admin.users.edit', $model) }}"
                />

            </div>
        @endif

    </div>

</div>
