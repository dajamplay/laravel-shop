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
                        <form class="contact-form" action="{{route('home.contacts.store')}}" method="post">
                            @csrf
                            <div class="group-input">
                                <div class="form-field me-lg-30 mb-35 mb-lg-0">
                                    <input type="text" name="con_firstName" id="con_firstName" placeholder="Имя*" class="input-field" autocomplete="off">
                                </div>
                                <div class="form-field mb-35">
                                    <input type="text" name="con_lastName" id="con_lastName" placeholder="Фамилия*" class="input-field" autocomplete="off">
                                </div>
                            </div>
                            <div class="group-input mb-35">
                                <div class="form-field me-lg-30 mb-35 mb-lg-0">
                                    <input type="text" name="con_phone" id="con_phone" placeholder="Телефон*" class="input-field" autocomplete="off">
                                </div>
                                <div class="form-field">
                                    <input type="text" name="con_email" id="con_email" placeholder="Электронная почта*" class="input-field" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-field mb-5">
                                <textarea name="con_message" id="con_message" placeholder="Введите сообщение" class="textarea-field"></textarea>
                            </div>
                            <div class="contact-button-wrap">
                                <button type="submit" value="submit" class="btn btn btn-custom-size xl-size btn-pronia-primary" name="submit">Отправить</button>
                                <p class="form-messege mb-0"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <p>197110, Санкт-Петербург, ул. Большая Разночинная, дом 14, офис 516</p>--}}
{{--            <p>Бизнес-центр "Бизнес Депо"</p>--}}
{{--            <p>Ст.М. "Чкаловская"</p>--}}
{{--            <p>Тел: +7(911)744-78-88, +7(911)940-66-95</p>--}}
{{--            <p>E-mail: eleanta@yandex.ru</p>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="contact-with-map mt-30">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Afe87167dbac9cf72de4125c5fd85572fe53a708fe95801a4364f4e7811b2f8c4&amp;width=100%25&amp;height=480&amp;lang=ru_RU&amp;scroll=false"></script>
    </div>

@endsection
