@include('base')

<header>

    {{-- header code --}}
    <h3>header</h3>

    {{-- localization block --}}
    <ul>
        <li>
            <a href="{{URL::to('/set_locale?lang=en')}}">En</a>
        </li>
        /
        <li>
            <a href="{{URL::to('/set_locale?lang=ru')}}">Ru</a>
        </li>
    </ul>


</header>