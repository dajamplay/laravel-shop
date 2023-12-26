@extends('layouts.public')

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
                        <div class="contact-info text-white">
                            <h2 class="contact-title custom-selection">{{__('Информация:')}}</h2>
                            <p class="contact-desc custom-selection">{{ $settings('contacts_description') }}</p>
                            <ul class="contact-list">
                                <li>
                                    <i class="pe-7s-call"></i>
                                    <a class="custom-selection" href="tel://{{ $settings('contacts_telephone') }}">{{ $settings('contacts_telephone') }}</a>
                                </li>
                                <li>
                                    <i class="pe-7s-mail"></i>
                                    <a class="custom-selection" href="mailto://{{ $settings('contacts_email') }}">{{ $settings('contacts_email') }}</a>
                                </li>
                                <li>
                                    <i class="pe-7s-map-marker"></i>
                                    <span class="custom-selection">{{ $settings('contacts_house') }}</span>
                                </li>
                                <li>
                                    <span class="custom-selection">{{ $settings('contacts_street') }}</span>
                                </li>
                                <li>
                                    <span class="custom-selection">{{ $settings('contacts_metro') }}</span>
                                </li>
                            </ul>
                        </div>
                        <livewire:contacts.contact-form />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-with-map mt-30 shadow-card">
        <script type="text/javascript" charset="utf-8" async
                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Afe87167dbac9cf72de4125c5fd85572fe53a708fe95801a4364f4e7811b2f8c4&amp;width=100%25&amp;height=480&amp;lang=ru_RU&amp;scroll=false"></script>
    </div>

@endsection
