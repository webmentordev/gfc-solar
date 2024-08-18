@extends('layouts.app')
@section('content')
    <section class="w-full h-[500px] bg-cover bg-center relative flex items-center justify-center"
        style="background-image: url({{ asset('assets/65-megawatt-solar-plant-germany.jpg') }})">
        <div class="header top-0 left-0 absolute w-full h-full"></div>
        <div class="text-center relative z-10">
            <h2 class="text-white text-[70px] leading-[80px]"><strong class="link text-primary">65 Megawatt
                    <br></strong>
                Solarprojekt in Deutschland</h2>
            <p class="text-white font-semibold">GFC EUROPEs größtes 65-Megawatt-Projekt auf dem großen Freiland in
                Deutschland</p>
        </div>
    </section>

    <section class="w-full p-6">
        <p class="text-center"></p>
        <div class="grid grid-cols-4 gap-6 images">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/22.png') }}" alt="65Megawatt project 18">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/23.png') }}" alt="65Megawatt project 19">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/24.png') }}" alt="65Megawatt project 20">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/25.png') }}" alt="65Megawatt project 21">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/26.png') }}" alt="65Megawatt project 22">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/27.png') }}" alt="65Megawatt project 23">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/28.png') }}" alt="65Megawatt project 24">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/29.png') }}" alt="65Megawatt project 25">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/30.png') }}" alt="65Megawatt project 26">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/31.png') }}" alt="65Megawatt project 27">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/32.png') }}" alt="65Megawatt project 28">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/33.png') }}" alt="65Megawatt project 29">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/34.png') }}" alt="65Megawatt project 30">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/36.png') }}" alt="65Megawatt project 31">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/37.png') }}" alt="65Megawatt project 32">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/38.png') }}" alt="65Megawatt project 33">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/39.png') }}" alt="65Megawatt project 34">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/40.png') }}" alt="65Megawatt project 35">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/41.png') }}" alt="65Megawatt project 36">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/42.png') }}" alt="65Megawatt project 37">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/43.png') }}" alt="65Megawatt project 38">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/44.png') }}" alt="65Megawatt project 39">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/45.png') }}" alt="65Megawatt project 40">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/46.png') }}" alt="65Megawatt project 41">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/47.png') }}" alt="65Megawatt project 42">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/48.png') }}" alt="65Megawatt project 43">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/49.png') }}" alt="65Megawatt project 44">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/45.png') }}" alt="65Megawatt project 46">
            <img class="lazyload" data-src="{{ asset('assets/projects/65-MW/21.png') }}" alt="65Megawatt project 49">
        </div>
    </section>
@endsection
