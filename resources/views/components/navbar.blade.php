<nav class="w-full px-6 sticky top-0 left-0 bg-white/90 backdrop-blur-sm z-50">
    <div class="py-3 flex justify-between items-center">
        <a href="{{ route('home') }}" class="flex items-center font-normal text-2xl link">
            GFC EUROPE
        </a>
        <ul class="flex items-center font-semibold 1080px:hidden">
            <a href="{{ route('home') }}"
                class="px-5 @if (request()->routeIs('home')) text-dark @else text-gray-500 @endif">Startseite</a>
            <a href="{{ route('home') }}#uberuns" class="px-5 text-gray-500">Über
                uns</a>
            <div class="flex items-center relative px-5 group">
                <a href="{{ route('home') }}#projekte"
                    class="mr-2 @if (request()->routeIs('projects')) text-dark @else text-gray-500 @endif">Projekte</a>
                <img src="https://api.iconify.design/ic:outline-keyboard-arrow-down.svg?color=%232b2b2b"
                    alt="Carot down">
                <div
                    class="absolute w-[200px] py-3 shadow-lg bg-white rounded-lg top-5 right-0 border border-gray-100 hidden group-hover:block">
                    <ul class="flex flex-col">
                        <a href="{{ route('58-mwp') }}" class="p-3 border-b border-gray-100 text-gray-500">58MWP
                            Projekte</a>
                        <a href="{{ route('65-mwp') }}" class="p-3 border-b border-gray-100 text-gray-500">60MWP
                            Projekte</a>
                        <a href="{{ route('727-kwp') }}" class="p-3 border-b border-gray-100 text-gray-500">727KWP
                            Projekte</a>
                        <a href="{{ route('761-kwp') }}" class="p-3 text-gray-500">761KWP Projekte</a>
                    </ul>
                </div>
            </div>
            <a href="{{ route('home') }}#dienstleistungen"
                class="px-5 @if (request()->routeIs('services')) text-dark @else text-gray-500 @endif">Dienstleistungen</a>
            <a href="{{ route('home') }}#team"
                class="px-5 @if (request()->routeIs('team')) text-dark @else text-gray-500 @endif">Team</a>
        </ul>

        <a href="#"
            class="border border-gray-600 bg-black text-white py-2 rounded-full px-4 font-bold hover:bg-white hover:text-dark transition-all 1080px:hidden">Kontakt</a>

        <div class="hidden 1080px:block relative" x-data="{ open: false }">
            <img src="https://api.iconify.design/gravity-ui:bars-descending-align-right.svg?color=%23212121"
                alt="Align Logo" width="35" class="cursor-pointer" x-on:click="open = !open">
            <ul class="w-[200px] bg-white rounded-lg p-2 font-semibold absolute top-8 right-0 flex flex-col border border-gray-100 shadow-xl"
                x-show="open" x-cloak x-transition>
                <a class="mb-1 p-2 border-b border-gray-100" href="{{ route('home') }}">Startseite</a>
                <a class="mb-1 p-2 border-b border-gray-100" href="{{ route('home') }}#uberuns">Über uns</a>
                <a class="mb-1 p-2 border-b border-gray-100" href="{{ route('home') }}#projekte">Projekte</a>
                <li class="ml-2 mb-2"><a href="{{ route('58-mwp') }}" class="flex items-center">
                        <img src="https://api.iconify.design/material-symbols:chevron-right-rounded.svg?color=%2319191a"
                            alt=""> <span class="ml-1">58 MWP</span></a></li>
                <li class="ml-2 mb-2"><a href="{{ route('65-mwp') }}" class="flex items-center">
                        <img src="https://api.iconify.design/material-symbols:chevron-right-rounded.svg?color=%2319191a"
                            alt=""> <span class="ml-1">65 MWP</span></a></li>
                <li class="ml-2 mb-2"><a href="{{ route('727-kwp') }}" class="flex items-center">
                        <img src="https://api.iconify.design/material-symbols:chevron-right-rounded.svg?color=%2319191a"
                            alt=""> <span class="ml-1">727 KWP</span></a></li>
                <li class="ml-2 mb-2"><a href="{{ route('761-kwp') }}" class="flex items-center">
                        <img src="https://api.iconify.design/material-symbols:chevron-right-rounded.svg?color=%2319191a"
                            alt=""> <span class="ml-1">761 KWP</span></a></li>

                <a class="mb-1 p-2 border-b border-gray-100"
                    href="{{ route('home') }}#dienstleistungen">Dienstleistungen</a>
                <a class="mb-1 p-2 border-b border-gray-100" href="{{ route('home') }}#team">Team</a>
                <a class="p-1" href="#">Kontakt</a>
            </ul>
        </div>
    </div>
</nav>
