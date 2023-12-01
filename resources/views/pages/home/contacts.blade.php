@extends('layouts.home')

@section('content')

    @php
        $breadcrumbs = [
            ['title' => 'Главная', 'link' => '/'],
            ['title' => 'Контакты'],
        ];
    @endphp

    <x-breadcrumb h1="Контакты" :breadcrumbs="$breadcrumbs"/>

    <div class="contact-form-area mt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrap">
                        <div class="contact-info text-white" data-bg-image="assets/images/contacts/contacts_bg.jpg" style="background-image: url(&quot;assets/images/contacts/contacts_bg.jpg&quot;);">
                            <h2 class="contact-title">{{__('Информация:')}}</h2>
                            <p class="contact-desc">{{ $settings('contacts_description') }}</p>
                            <ul class="contact-list">
                                <li>
                                    <i class="pe-7s-call"></i>
                                    <a href="tel://{{ $settings('contacts_telephone') }}">{{ $settings('contacts_telephone') }}</a>
                                </li>
                                <li>
                                    <i class="pe-7s-mail"></i>
                                    <a href="mailto://{{ $settings('contacts_email') }}">{{ $settings('contacts_email') }}</a>
                                </li>
                                <li>
                                    <i class="pe-7s-map-marker"></i>
                                    <span>{{ $settings('contacts_house') }}</span>
                                </li>
                                <li>
                                    <span>{{ $settings('contacts_street') }}</span>
                                </li>
                                <li>
                                    <span>{{ $settings('contacts_metro') }}</span>
                                </li>
                            </ul>
                        </div>
                        <form class="contact-form" action="{{route('home.message.store')}}" method="post">
                            @csrf
                            <div class="group-input">
                                <div class="form-field me-lg-30 mb-35 mb-lg-0">
                                    <input type="text" name="first_name" id="first_name" placeholder="Имя*" class="input-field" autocomplete="off" value="{{old('first_name')}}">
                                    @if($errors->has('first_name'))<div class="text-danger">{{ $errors->first('first_name') }}</div>@endif
                                </div>
                                <div class="form-field mb-35">
                                    <input type="text" name="last_name" id="last_name" placeholder="Фамилия*" class="input-field" autocomplete="off" value="{{old('last_name')}}">
                                    @if($errors->has('last_name'))<div class="text-danger">{{ $errors->first('last_name') }}</div>@endif
                                </div>
                            </div>
                            <div class="group-input mb-35">
                                <div class="form-field me-lg-30 mb-35 mb-lg-0">
                                    <input type="text" name="phone" id="phone" placeholder="Телефон*" class="input-field" autocomplete="off" value="{{old('phone')}}">
                                    @if($errors->has('phone'))<div class="text-danger">{{ $errors->first('phone') }}</div>@endif
                                </div>
                                <div class="form-field">
                                    <input type="email" name="email" id="email" placeholder="Электронная почта*" class="input-field" autocomplete="off" value="{{old('email')}}">
                                    @if($errors->has('email'))<div class="text-danger">{{ $errors->first('email') }}</div>@endif
                                </div>
                            </div>
                            <div class="form-field mb-5">
                                <textarea name="message" id="message" placeholder="Введите сообщение" class="textarea-field">{{old('message')}}</textarea>
                                @if($errors->has('message'))<div class="text-danger">{{ $errors->first('message') }}</div>@endif
                            </div>
                            <div class="contact-button-wrap">
                                <button type="submit" value="submit" class="btn btn btn-custom-size btn-pronia-primary" name="submit">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-with-map mt-30">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Afe87167dbac9cf72de4125c5fd85572fe53a708fe95801a4364f4e7811b2f8c4&amp;width=100%25&amp;height=480&amp;lang=ru_RU&amp;scroll=false"></script>
    </div>

@endsection
