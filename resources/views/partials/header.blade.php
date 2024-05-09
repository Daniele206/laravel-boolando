@php

    $types = config('menues.headerMenues.types');
    $ico_menu = config('menues.headerMenues.icoMenu')

@endphp

<header>
    <div class="my_container">
        <div class="my_section">
            <ul class="my_menu">
                @foreach ($types as $type)
                    <li class="{{$type['text'] === 'Uomo' ? 'mx-2' : ''}}">
                        <a
                        class="{{Route::currentRouteName() === $type['text'] ? 'active text-capitalize' : 'text-capitalize'}}"
                        href="{{route($type['text'])}}"
                        >{{$type['text']}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="my_section d-flex justify-content-center">
            <img class="w-75" src="/img/boolean-logo.png" alt="Boolean">
        </div>
        <div class="my_section d-flex justify-content-end">
            <ul class="my_menu">
                @foreach ($ico_menu as $ico)
                <li class="{{ $ico['link'] === 'like' ? 'mx-2' : ''}}">
                    <a class="{{Route::currentRouteName() === $ico['link'] ? 'active' : ''}}" href="{{route($ico['link'])}}">
                    <i class="{{$ico['class']}}"></i>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>
