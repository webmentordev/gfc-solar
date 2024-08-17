<nav class="w-full px-6 sticky top-0 left-0 bg-white/90 backdrop-blur-sm z-50">
    <div class="py-3 flex justify-between items-center">
        <a href="{{ route('home') }}" class="flex items-center font-normal text-2xl link">
            GFC EUROPE
        </a>
        <ul class="flex items-center font-semibold">
            <a href="#" class="px-5 @if (request()->routeIs('home')) text-dark @else text-gray-500 @endif">Home</a>
            <a href="#" class="px-5 @if (request()->routeIs('about')) text-dark @else text-gray-500 @endif">About
                Us</a>
            <a href="#"
                class="px-5 @if (request()->routeIs('projects')) text-dark @else text-gray-500 @endif">Project</a>
            <a href="#"
                class="px-5 @if (request()->routeIs('services')) text-dark @else text-gray-500 @endif">Services</a>
            <a href="#"
                class="px-5 @if (request()->routeIs('team')) text-dark @else text-gray-500 @endif">Team</a>
        </ul>

        <a href="#"
            class="border border-gray-600 bg-black text-white py-2 rounded-full px-4 font-bold hover:bg-white hover:text-dark transition-all">Get
            in touch</a>
    </div>
</nav>
