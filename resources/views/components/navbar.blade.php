<nav class="w-full px-6 sticky top-0 left-0 bg-white/90 backdrop-blur-sm z-50">
    <div class="py-3 flex justify-between items-center">
        <a href="{{ route('home') }}" class="flex items-center font-normal text-2xl link">
            GFC EUROPE
        </a>
        <ul class="flex items-center font-semibold">
            <a href="#"
                class="px-5 @if (request()->routeIs('home')) text-dark @else text-gray-500 @endif">Startseite</a>
            <a href="#" class="px-5 @if (request()->routeIs('about')) text-dark @else text-gray-500 @endif">Über
                uns</a>
            <div class="flex items-center relative px-5 group">
                <a href="#"
                    class="mr-2 @if (request()->routeIs('projects')) text-dark @else text-gray-500 @endif">Projekte</a>
                <img src="https://api.iconify.design/ic:outline-keyboard-arrow-down.svg?color=%232b2b2b"
                    alt="Carot down">
                <div
                    class="absolute w-[200px] py-3 shadow-lg bg-white rounded-lg top-5 right-0 border border-gray-100 hidden group-hover:block">
                    <ul class="flex flex-col">
                        <a href="{{ route('50-mw') }}" class="p-3 border-b border-gray-100 text-gray-500">50MW
                            Projekte</a>
                        <a href="{{ route('65-mw') }}" class="p-3 border-b border-gray-100 text-gray-500">60MW
                            Projekte</a>
                        <a href="{{ route('730-kw') }}" class="p-3 border-b border-gray-100 text-gray-500">730KW
                            Projekte</a>
                        <a href="{{ route('750-kw') }}" class="p-3 text-gray-500">750KW Projekte</a>
                    </ul>
                </div>
            </div>
            <a href="#"
                class="px-5 @if (request()->routeIs('services')) text-dark @else text-gray-500 @endif">Dienstleistungen</a>
            <a href="#"
                class="px-5 @if (request()->routeIs('team')) text-dark @else text-gray-500 @endif">Team</a>
        </ul>

        <a href="#"
            class="border border-gray-600 bg-black text-white py-2 rounded-full px-4 font-bold hover:bg-white hover:text-dark transition-all">Kontaktieren
            Sie uns</a>
    </div>
</nav>
