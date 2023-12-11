@include('models.NavElement')
@php

    $nav_list[] = new NavElement('characters', '#');
    $nav_list[] = new NavElement('comics', '#');
    $nav_list[] = new NavElement('movies', '#');
    $nav_list[] = new NavElement('tv', '#');
    $nav_list[] = new NavElement('games', '#');
    $nav_list[] = new NavElement('collectibles', '#');
    $nav_list[] = new NavElement('videos', '#');
    $nav_list[] = new NavElement('fans', '#');
    $nav_list[] = new NavElement('news', '#');
    $nav_list[] = new NavElement('shop', '#');

@endphp


<header>

    <div class=" bg-blue-500 py-[0.35rem]">
        <div class=" my-0 mx-auto container">
            <ul class="flex justify-end gap-16 text-white font-[500] text-xs text-[0.8rem] uppercase">
                <li>DC POWER VISA</li>
                <li>ADDITIONAL DC SITES</li>
            </ul>
        </div>
    </div>
    <div class="bg-white">
        <div class=" my-0 mx-auto container">
            <div class="flex justify-between">
                <img class="w-[105px] p-3" alt="logo" src={{ Vite::asset('resources/img/dc-logo.png') }}>
                <ul class="uppercase font-[500] text-base gap-8 flex text-gray-600 ">
                    @foreach ($nav_list as $nav_element)
                        <li
                            class="flex items-center {{ Route::currentRouteName() == $nav_element->getName() ? '  relative text-blue-500' : '' }} ">
                            @if (Route::currentRouteName() == $nav_element->getName())
                                <div class="absolute rounded left-0 bottom-0 w-full h-[5px] bg-blue-500"></div>
                            @endif

                            <a href={{ $nav_element->getLink() }}>
                                {{ $nav_element->getName() }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                <input type="text" placeholder="Search"
                    class="placeholder:text-gray-600 focus-visible:outline-none font-[500] text-gray-600 border-b-2 text-right w-[130px] border-blue-500 self-center">
            </div>
        </div>
    </div>
</header>
