@php

$infos = config('menues.footerMenues.info');
$socials = config('menues.footerMenues.socials');

@endphp

<footer>
    <div class="my_container">
        <div>
            <span class="agency">Boolando s.r.l.</span>
            <div>
            <ul class="my_menu">
                @foreach ($infos as $info)
                    <li>
                        <a
                        class="{{ $info['text'] === 'Informativa sulla privacy' ? 'mx-2' : ''}}"
                        href="#"
                        >{{$info['text']}}</a>
                    </li>
                @endforeach
            </ul>
            </div>
        </div>
        <div>
            <span class="social_direct">Trovaci anche su</span>
            <div>
            <ul class="my_menu justify-content-between">
                @foreach ($socials as $social)
                    <li>
                        <a href="#">
                            <i class="{{$social['class']}}"></i>
                        </a>
                    </li>
                @endforeach
            </ul>
            </div>
        </div>
    </div>
</footer>
