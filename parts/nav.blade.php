@php
    $menus = getMenu();
    $defaults = getThemeDefaults();
@endphp

<span id="top"></span>
<div id="nav_fixed_bottom" class="nav-fixed-bottom">
    <a href="#top" title="Move to top"><div class="nav-move-top">&#10224;</div></a>
</div>
<nav class="nav">
    <div class="">
        <div class="">
            <div class="body-margin flex h-36 primary-text-color justify-between items-center noto-sans-display-font">
                <div class="">
                    <a href="{{ homeUrl() }}" class="flex link items-center gap-8 text-xl uppercase">
                        <div class="w-20 h-20">
                            <?php include_once './assets/img/logo.svg'; ?>
                        </div>
                        <span>{{ dashToSpace(settings('r', 'general.name')) }}</span>
                    </a>
                </div>
                <div class="tag-line">
                    {{$defaults['tag-line']}}
                </div>
            </div>
            <div class="nav-menu-container" id="nav_menu_container_id">
                <div class="body-margin nav-menu">
                    <ul class="menu-bar">
                        @foreach ($menus as $menu)
                            <li class="menu-item">{!! $menu !!}</li>
                        @endforeach
                    </ul>
                    <div class="blinds" id="blinds_container_id"></div>
                    <div class="menu-mobile-btn" onclick="handleNav()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<button id="show_nav" class="hidden" type="button" onclick="handleNav()"></button>

<label id="label_nav_collapsed" for="show_nav" class="fixed top-0 w-full h-full bg-black z-40 opacity-70 transition duration-300 ease-in-out delay-500"></label>
<div id="nav_collapsed" class="fixed nav-collapse">
    <div class="flex flex-col gap-8">
        <div class="nav-collapsed-header">
            <a class="font-bold text-white" href="{{ homeUrl() }}"><span>{{ settings('r', 'general.name') }}</span></a>
            <div id="blinds_container_collapse_id" class="blinds-collapse"></div>
            <label class="cursor-pointer" for="show_nav">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" view-box="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </label>
        </div>

        <ul class="flex flex-col gap-4 items-start">
            @foreach ($menus as $menu)
                <li class="menu-item-mobile">{!! $menu !!}</li>
            @endforeach
        </ul>
    </div>
</div>

<div class="h-24"></div>
