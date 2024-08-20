@extends('layouts.app')
@section('content')
    <section class="w-full h-[500px] 510px:h-[350px] bg-cover bg-center relative flex items-center justify-center"
        style="background-image: url({{ asset('assets/50-megawatt-solar-plant-germany.jpg') }})">
        <div class="header top-0 left-0 absolute w-full h-full"></div>
        <div class="text-center relative z-10 px-4">
            <h2 class="text-white text-[70px] leading-[80px] 920px:text-6xl 770px:text-4xl 510px:text-3xl 400px:text-xl">
                <strong class="link text-primary">50 Megawatt
                    <br></strong>
                Solarprojekt in Deutschland
            </h2>
            <p class="text-white font-semibold">GFC EUROPEs größtes 65-Megawatt-Projekt auf dem großen Freiland in
                Deutschland</p>
        </div>
    </section>

    <section class="w-full p-6 480px:p-4">
        <p class="text-center"></p>
        <div class="grid grid-cols-4 gap-6 images 1160px:grid-cols-3 650px:grid-cols-2 480px:grid-cols-1">
            <img class="lazyload" data-src="{{ asset('assets/projects/50-MW/1.png') }}" alt="50 Megawatt project 1">
            <img class="lazyload" data-src="{{ asset('assets/projects/50-MW/2.png') }}" alt="50 Megawatt project 2">
            <img class="lazyload" data-src="{{ asset('assets/projects/50-MW/3.png') }}" alt="50 Megawatt project 3">
            <img class="lazyload" data-src="{{ asset('assets/projects/50-MW/4.png') }}" alt="50 Megawatt project 4">
            <img class="lazyload" data-src="{{ asset('assets/projects/50-MW/5.png') }}" alt="50 Megawatt project 5">
            <img class="lazyload" data-src="{{ asset('assets/projects/50-MW/6.png') }}" alt="50 Megawatt project 6">
            <img class="lazyload" data-src="{{ asset('assets/projects/50-MW/7.png') }}" alt="50 Megawatt project 7">
            <img class="lazyload" data-src="{{ asset('assets/projects/50-MW/8.png') }}" alt="50 Megawatt project 8">
            <img class="lazyload" data-src="{{ asset('assets/projects/50-MW/9.png') }}" alt="50 Megawatt project 9">
            <img class="lazyload" data-src="{{ asset('assets/projects/50-MW/10.png') }}" alt="50 Megawatt project 10">
            <img class="lazyload" data-src="{{ asset('assets/projects/50-MW/11.png') }}" alt="50 Megawatt project 11">
            <img class="lazyload" data-src="{{ asset('assets/projects/50-MW/12.png') }}" alt="50 Megawatt project 12">
            <img class="lazyload" data-src="{{ asset('assets/projects/50-MW/13.png') }}" alt="50 Megawatt project 13">
            <img class="lazyload" data-src="{{ asset('assets/projects/50-MW/14.png') }}" alt="50 Megawatt project 14">
            <img class="lazyload" data-src="{{ asset('assets/projects/50-MW/15.png') }}" alt="50 Megawatt project 15">
            <img class="lazyload" data-src="{{ asset('assets/projects/50-MW/16.png') }}" alt="50 Megawatt project 16">
            <img class="lazyload" data-src="{{ asset('assets/projects/50-MW/17.png') }}" alt="50 Megawatt project 17">
            <img class="lazyload" data-src="{{ asset('assets/projects/50-MW/18.png') }}" alt="50 Megawatt project 18">
            <img class="lazyload" data-src="{{ asset('assets/projects/50-MW/19.png') }}" alt="50 Megawatt project 19">
            <img class="lazyload" data-src="{{ asset('assets/projects/50-MW/20.png') }}" alt="50 Megawatt project 20">
            <img class="lazyload" data-src="{{ asset('assets/projects/50-MW/21.png') }}" alt="50 Megawatt project 21">
        </div>
    </section>
@endsection
