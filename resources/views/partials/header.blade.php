<header>
    <div class="my_container">
        <div class="my_section">
            <ul class="my_menu">
                <li>
                    <a
                    class="{{Route::currentRouteName() === 'donna' ? 'active' : ''}}"
                    href="{{route('donna')}}"
                    >Donna</a>
                </li>
                <li>
                    <a
                    class="{{Route::currentRouteName() === 'uomo' ? 'active mx-2' : 'mx-2'}}"
                    href="{{route('uomo')}}"
                    >Uomo</a>
                </li>
                <li>
                    <a
                    class="{{Route::currentRouteName() === 'bambini' ? 'active' : ''}}"
                    href="{{route('bambini')}}"
                    >Bambini</a>
                </li>
            </ul>
        </div>
        <div class="my_section d-flex justify-content-center">
            <img class="w-75" src="/img/boolean-logo.png" alt="Boolean">
        </div>
        <div class="my_section d-flex justify-content-end">
            <ul class="my_menu">
                <li class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}">
                    <a href="{{route('home')}}">
                    <i class="fa-regular fa-user"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <i class="mx-2 fa-regular fa-heart"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <i class="fa-solid fa-bag-shopping"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
