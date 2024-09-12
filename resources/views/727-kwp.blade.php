@extends('layouts.app')
@section('content')
    <section class="w-full h-[500px] 510px:h-[350px] bg-cover bg-center relative flex items-center justify-center"
        style="background-image: url({{ asset('assets/727-killo-watt-solar-plant-in-deutschland.jpg') }})">
        <div class="header top-0 left-0 absolute w-full h-full"></div>
        <div class="text-center relative z-10">
            <h2 class="text-white text-[70px] leading-[80px] 920px:text-6xl 770px:text-4xl 510px:text-3xl 400px:text-xl">
                <strong class="link text-primary">727 KWP
                    <br></strong>
                Solarprojekt in Deutschland
            </h2>
            <p class="text-white font-semibold">GFC EUROPEs größtes 727-Killowatt-Projekt auf dem großen Freiland in
                Deutschland. <br> Das Projekt umfasst insgesamt 10 Wechselrichter, 1 Transformator und 1.709 Module.</p>
        </div>
    </section>

    <section class="w-full p-6 480px:p-4">
        <p class="text-center"></p>
        <div class="grid grid-cols-6 gap-6 images 1160px:grid-cols-3 650px:grid-cols-2 480px:grid-cols-1">
            <img class="lazyload" data-src="{{ asset('assets/projects/730-KW/4.png') }}" alt="730 Killo Watt project 4">
            <img class="lazyload" data-src="{{ asset('assets/projects/730-KW/5.png') }}" alt="730 Killo Watt project 5">
            <img class="lazyload" data-src="{{ asset('assets/projects/730-KW/6.png') }}" alt="730 Killo Watt project 6">
            <img class="lazyload" data-src="{{ asset('assets/projects/730-KW/7.png') }}" alt="730 Killo Watt project 7">
            <img class="lazyload col-span-2" data-src="{{ asset('assets/projects/730-KW/8.png') }}"
                alt="730 Killo Watt project 8">
            <img class="lazyload" data-src="{{ asset('assets/projects/730-KW/9.png') }}" alt="730 Killo Watt project 9">
            <img class="lazyload" data-src="{{ asset('assets/projects/730-KW/10.png') }}" alt="730 Killo Watt project 10">
            <img class="lazyload" data-src="{{ asset('assets/projects/730-KW/11.png') }}" alt="730 Killo Watt project 11">
            <img class="lazyload" data-src="{{ asset('assets/projects/730-KW/12.png') }}" alt="730 Killo Watt project 12">
            <img class="lazyload" data-src="{{ asset('assets/projects/730-KW/13.png') }}" alt="730 Killo Watt project 13">
        </div>
    </section>
@endsection
