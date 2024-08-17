@extends('layouts.app')
@section('content')
    <section class="w-full px-6">
        <div class="bg-center bg-cover h-[800px] rounded-xl overflow-hidden relative"
            style="background-image: url({{ asset('assets/solar-panels-germany-installation.jpg') }})">
            <div class="header top-0 left-0 absolute w-full h-full"></div>
            <div class="max-w-7xl m-auto px-4 py-6 relative z-10 flex flex-col justify-center h-[700px]">
                <div class="w-full" data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="text-6xl text-white capitalize text-center leading-[75px] ">Transforming Energy, Preserving
                        Nature,
                        <br> Our
                        Solar
                        Promise
                    </h1>
                    <p class="text-center text-white">Switing to solar energy has never been easier. GFC Europe offer a range
                        of solar solutions <br> designed
                        to make your transition to clean energy seamless.</p>
                </div>
            </div>
            <div class="flex justify-between relative z-10 px-6">
                <div class="grid grid-cols-3 gap-6 max-w-7xl">
                    <div class="max-w-[400px] text-white" data-aos="fade-up" data-aos-duration="1000">
                        <h4 class="text-4xl">130</h4>
                        <p class="text-lg">Total installations</p>
                    </div>
                    <div class="max-w-[400px] text-white" data-aos="fade-up" data-aos-duration="2000">
                        <h4 class="text-4xl">125</h4>
                        <p class="text-lg">Satisfied Customers</p>
                    </div>
                    <div class="max-w-[400px] text-white" data-aos="fade-up" data-aos-duration="3000">
                        <h4 class="text-4xl">15</h4>
                        <p class="text-lg">States Serviced</p>
                    </div>
                </div>
                <div class="text-end max-w-lg text-white" data-aos="fade-left" data-aos-duration="2000">
                    <p class="text-lg">"We aren't just build. with serve with love for human and preserving nature with
                        norms and
                        conditions"</p>
                    <span class="font-bold">Aamir Shaheen - CEO / GFC EUROPE</span>
                </div>
            </div>
        </div>
    </section>


    <section class="w-full py-[60px] px-6">
        <div class="max-w-[90%] m-auto">
            <h2 class="text-dark text-[70px] leading-[80px]">Environmentally <br> Friendly Energy Using <strong
                    class="link text-primary">Solar
                    Panels.</strong></h2>
        </div>
    </section>

    <section class="w-full py-[60px] px-6 bg-gray-50">
        <div class="max-w-[90%] m-auto">
            <div class="grid grid-cols-3 gap-7">
                <div class="p-6 col-span-2">
                    <h2 class="text-dark text-3xl mb-4">Our <strong class="link text-primary">Services</strong>
                    </h2>
                    <div class="flex flex-col rounded-lg bg-white p-6 mb-8">
                        <div class="flex">
                            <div
                                class="w-[120px] h-[70px] rounded-full flex mr-6 items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/icons/residential-solar-panels.png') }}"
                                    alt="Residential Solar Panels" width="30">
                            </div>
                            <div class="flex flex-col pt-1">
                                <span class="font-semibold">Residential Solar Applications</span>
                                <p class="text-grade text-sm">Cut your electricity bills and reduce your carbon footprint by
                                    switching to clean,
                                    renewable solar energy for your home. Transform your home into a sustainable energy
                                    powerhouse with our advanced residential solar panel systems.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col rounded-lg bg-white p-6 mb-8">
                        <div class="flex">
                            <div
                                class="w-[100px] h-[70px] rounded-full flex mr-6 items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/icons/industrial-solar-panels.png') }}"
                                    alt="Residential Solar Panels" width="30">
                            </div>
                            <div class="flex flex-col pt-1">
                                <span class="font-semibold">Industrial Solar Applications</span>
                                <p class="text-grade text-sm">Maximize efficiency and reduce operational costs with our
                                    robust industrial solar energy solutions. Power your industry sustainably with scalable
                                    solar
                                    installations
                                    designed to meet high-energy demands.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col rounded-lg bg-white p-6 mb-8">
                        <div class="flex">
                            <div
                                class="w-[100px] h-[70px] rounded-full flex mr-6 items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/icons/residential-solar-panels.png') }}"
                                    alt="Residential Solar Panels" width="30">
                            </div>
                            <div class="flex flex-col pt-1">
                                <span class="font-semibold">Solar Park Freeland Application</span>
                                <p class="text-grade text-sm">Harness the full potential of solar energy with our expertly
                                    designed
                                    freeland solar park solutions. Transform vast open spaces into renewable energy hubs
                                    with our efficient and scalable solar park applications.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6 col-span-1">
                    <p class="capitalize text-2xl font-semibold mb-2">We specilize in the transition to reliable energy</p>
                    <p class="text-grade mb-8">We drive the transition to reliable & affordable energy system. With our
                        innovative technologies, we energize society!</p>
                    <img src="{{ asset('assets/residential-application-solar-panels.png') }}"
                        alt="Residential Application Solar Panels">
                </div>
            </div>
        </div>
    </section>


    <section class="w-full h-[400px] bg-cover bg-center relative flex items-center justify-center"
        style="background-image: url({{ asset('assets/home-with-solar-panels-banner-2.jpg') }})">
        <div class="header top-0 left-0 absolute w-full h-full"></div>
        <h2 class="text-white text-[70px] leading-[80px] relative z-10 text-center">We Build <strong
                class="link text-primary">Solar
                Parks <br></strong> on Free Land </h2>
    </section>


    <section class="w-full p-6">
        <div class="max-w-[80%] m-auto grid grid-cols-3 gap-6">
            <div class="w-full border-r border-gray-100 py-12 px-12">
                <h3 class="mb-4">Environmentally Friendly</h3>
                <p class="text-grade">Help preserve the environment by using solar panels, and also this product uses
                    environment friendly
                    meterials.</p>
            </div>
            <div class="w-full p-12">
                <h3 class="mb-4">Reserve Energy</h3>
                <p class="text-grade">If you use solar panels, you will save tens of millions in on year, becasue you
                    don't have to pay for
                    electricity</p>
            </div>
            <div class="w-full border-l border-gray-100 py-12 px-12">
                <h3 class="mb-4">Save The Earth</h3>
                <p class="text-grade">With this innovation, of course we are hoping to save the earth from global
                    warming, as well as other
                    dangers.</p>
            </div>
        </div>
    </section>
@endsection
