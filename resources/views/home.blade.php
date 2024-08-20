@extends('layouts.app')
@section('content')
    <section class="w-full px-6">
        <div class="bg-center bg-cover h-[800px] rounded-xl overflow-hidden relative"
            style="background-image: url({{ asset('assets/solar-panels-germany-installation.jpg') }})">
            <div class="header top-0 left-0 absolute w-full h-full"></div>
            <div class="max-w-7xl m-auto px-4 py-6 relative z-10 flex flex-col justify-center h-[670px]">
                <div class="w-full" data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="text-6xl text-white capitalize text-center leading-[75px] ">
                        Transformierende Energie, Natur bewahren,
                        Unser Solarversprechen
                    </h1>
                    <p class="text-center text-white">Der Umstieg auf Solarenergie war noch nie so einfach. GFC Europe bietet
                        eine Vielzahl von Solar-Lösungen an, <br> die darauf ausgelegt sind, Ihren Übergang zu sauberer
                        Energie
                        reibungslos zu gestalten.</p>
                </div>
            </div>
            <div class="flex justify-between relative z-10 px-6">
                <div class="grid grid-cols-3 gap-6 max-w-7xl mt-4">
                    <div class="max-w-[400px] text-white" data-aos="fade-up" data-aos-duration="1000">
                        <h4 class="text-4xl">130</h4>
                        <p class="text-lg">Gesamtinstallationen</p>
                    </div>
                    <div class="max-w-[400px] text-white" data-aos="fade-up" data-aos-duration="2000">
                        <h4 class="text-4xl">125</h4>
                        <p class="text-lg">Zufriedene Kunden</p>
                    </div>
                    <div class="max-w-[400px] text-white" data-aos="fade-up" data-aos-duration="3000">
                        <h4 class="text-4xl">15</h4>
                        <p class="text-lg">Versorgte Bundesländer</p>
                    </div>
                </div>
                <div class="text-end max-w-lg text-white" data-aos="fade-left" data-aos-duration="2000">
                    <p class="text-lg">"Wir bauen nicht nur, sondern dienen mit Liebe für den Menschen und bewahren die
                        Natur im Einklang mit Normen und Bedingungen."</p>
                    <span class="font-bold">Aamir Shaheen - CEO / GFC EUROPE</span>
                </div>
            </div>
        </div>
    </section>


    <section class="w-full py-[60px] px-6">
        <div class="max-w-[90%] m-auto">
            <h2 class="text-dark text-[70px] leading-[80px]">Umweltfreundliche <br> Energie durch <br><strong
                    class="link text-primary">Solarpanels.</strong></h2>
        </div>
    </section>

    <section class="w-full py-[60px] px-6 bg-gray-50" id="about-us">
        <div class="max-w-[90%] m-auto">
            <div class="grid grid-cols-3 gap-7">
                <div class="p-6 col-span-2">
                    <h2 class="text-dark text-3xl mb-4">Unsere <strong class="link text-primary">Dienstleistungen</strong>
                    </h2>
                    <div class="flex flex-col rounded-lg bg-white p-6 mb-8">
                        <div class="flex">
                            <div
                                class="w-[120px] h-[70px] rounded-full flex mr-6 items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/icons/residential-solar-panels.png') }}"
                                    alt="Solaranwendungen für Wohngebäude" width="30">
                            </div>
                            <div class="flex flex-col pt-1">
                                <span class="font-semibold">Solaranwendungen für Wohngebäude</span>
                                <p class="text-grade text-sm">Senken Sie Ihre Stromrechnungen und reduzieren Sie Ihren
                                    CO2-Fußabdruck, indem Sie auf saubere, erneuerbare Solarenergie für Ihr Zuhause
                                    umsteigen. Verwandeln Sie Ihr Zuhause mit unseren fortschrittlichen Solarpanelsystemen
                                    in ein nachhaltiges Energiezentrum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col rounded-lg bg-white p-6 mb-8">
                        <div class="flex">
                            <div
                                class="w-[100px] h-[70px] rounded-full flex mr-6 items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/icons/industrial-solar-panels.png') }}"
                                    alt="Solaranwendungen für die Industrie" width="30">
                            </div>
                            <div class="flex flex-col pt-1">
                                <span class="font-semibold">Solaranwendungen für die Industrie</span>
                                <p class="text-grade text-sm">Maximieren Sie die Effizienz und senken Sie die Betriebskosten
                                    mit unseren robusten Solarenergielösungen für die Industrie. Versorgen Sie Ihre Branche
                                    nachhaltig mit skalierbaren Solarinstallationen, die auf hohe Energieanforderungen
                                    ausgelegt sind.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col rounded-lg bg-white p-6 mb-8">
                        <div class="flex">
                            <div
                                class="w-[100px] h-[70px] rounded-full flex mr-6 items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/icons/solar-park-free-land.png') }}"
                                    alt="Freiland-Solarpark-Anwendung" width="30">
                            </div>
                            <div class="flex flex-col pt-1">
                                <span class="font-semibold">Freiland-Solarpark-Anwendung</span>
                                <p class="text-grade text-sm">Nutzen Sie das volle Potenzial der Solarenergie mit unseren
                                    fachmännisch entworfenen Freiland-Solarparklösungen. Verwandeln Sie große Freiflächen in
                                    erneuerbare Energiezentren mit unseren effizienten und skalierbaren
                                    Freiland-Solarpark-Anwendungen.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6 col-span-1">
                    <p class="capitalize text-2xl font-semibold mb-2">Wir spezialisieren uns auf den Übergang zu
                        zuverlässiger Energie.</p>
                    <p class="text-grade mb-8">Wir treiben den Übergang zu einem zuverlässigen und erschwinglichen
                        Energiesystem voran. Mit unseren innovativen Technologien versorgen wir die Gesellschaft mit
                        Energie!</p>
                    <img src="{{ asset('assets/residential-application-solar-panels.png') }}"
                        alt="Residential Application Solar Panels">
                </div>
            </div>
        </div>
    </section>


    <section class="w-full h-[400px] bg-cover bg-center relative flex items-center justify-center"
        style="background-image: url({{ asset('assets/home-with-solar-panels-banner-2.jpg') }})">
        <div class="header top-0 left-0 absolute w-full h-full"></div>
        <h2 class="text-white text-[70px] leading-[80px] relative z-10 text-center">Wir bauen
            <strong class="link text-primary">Solarparks <br></strong> auf freiem Land
        </h2>
    </section>


    <section class="w-full p-6">
        <div class="max-w-[80%] m-auto grid grid-cols-3 gap-6">
            <div class="w-full border-r border-gray-100 py-12 px-12">
                <h3 class="mb-4">Umweltfreundlich</h3>
                <p class="text-grade">Helfen Sie, die Umwelt zu schützen, indem Sie Solarpanels verwenden, die zudem
                    umweltfreundliche Materialien enthalten.</p>
            </div>
            <div class="w-full p-12">
                <h3 class="mb-4">Energie sparen</h3>
                <p class="text-grade">Wenn Sie Solarpanels nutzen, sparen Sie innerhalb eines Jahres Millionen, da Sie keine
                    Stromkosten zahlen müssen.</p>
            </div>
            <div class="w-full border-l border-gray-100 py-12 px-12">
                <h3 class="mb-4">Rettet die Erde</h3>
                <p class="text-grade">Mit dieser Innovation hoffen wir natürlich, die Erde vor der globalen Erwärmung und
                    anderen Gefahren zu schützen.</p>
            </div>
        </div>
    </section>
@endsection
