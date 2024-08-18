@extends('layouts.app')
@section('content')
    <section class="w-full h-[500px] bg-cover bg-center relative flex items-center justify-center"
        style="background-image: url({{ asset('assets/730-killo-watt-solar-plant-in-deutschland.jpg') }})">
        <div class="header top-0 left-0 absolute w-full h-full"></div>
        <div class="text-center relative z-10">
            <h2 class="text-white text-[70px] leading-[80px]"><strong class="link text-primary">730 Killowatt
                    <br></strong>
                Solarprojekt in Deutschland</h2>
            <p class="text-white font-semibold">GFC EUROPEs größtes 730-Killowatt-Projekt auf dem großen Freiland in
                Deutschland</p>
        </div>
    </section>

    <section class="w-full p-6">
        <p class="text-center"></p>
        <div class="grid grid-cols-6 gap-6 images">
            <img class="lazyload" data-src="{{ asset('assets/projects/730-KW/4.png') }}" alt="65Megawatt project 4">
            <img class="lazyload" data-src="{{ asset('assets/projects/730-KW/5.png') }}" alt="65Megawatt project 5">
            <img class="lazyload" data-src="{{ asset('assets/projects/730-KW/6.png') }}" alt="65Megawatt project 6">
            <img class="lazyload" data-src="{{ asset('assets/projects/730-KW/7.png') }}" alt="65Megawatt project 7">
            <img class="lazyload col-span-2" data-src="{{ asset('assets/projects/730-KW/8.png') }}"
                alt="65Megawatt project 8">
            <img class="lazyload" data-src="{{ asset('assets/projects/730-KW/9.png') }}" alt="65Megawatt project 9">
            <img class="lazyload" data-src="{{ asset('assets/projects/730-KW/10.png') }}" alt="65Megawatt project 10">
            <img class="lazyload" data-src="{{ asset('assets/projects/730-KW/11.png') }}" alt="65Megawatt project 11">
            <img class="lazyload" data-src="{{ asset('assets/projects/730-KW/12.png') }}" alt="65Megawatt project 12">
            <img class="lazyload" data-src="{{ asset('assets/projects/730-KW/13.png') }}" alt="65Megawatt project 13">
        </div>
    </section>
@endsection
