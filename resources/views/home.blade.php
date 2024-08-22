@extends('layouts.app')
@section('content')
    <section class="w-full px-6">
        <div class="bg-center bg-cover h-[800px] rounded-xl overflow-hidden relative"
            style="background-image: url({{ asset('assets/solar-panels-germany-installation.jpg') }})">
            <div class="header top-0 left-0 absolute w-full h-full"></div>
            <div class="max-w-7xl m-auto px-4 py-6 relative z-10 flex flex-col justify-center h-[670px]">
                <div class="w-full" data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="text-6xl text-white capitalize text-center leading-[75px] ">
                        GFC Europe Experten für Solarpark Planung und Bauleitung
                    </h1>
                    <p class="text-center text-white">
                        Willkommen bei GFC Europe, Ihrem Partner für die Planung und Entwicklung von Freiflächen-Solarparks
                        in ganz Deutschland. Unser Ziel ist es, <br> ungenutztes Land in profitable und nachhaltige
                        Energiequellen zu verwandeln und so einen Beitrag zu einer grüneren Zukunft zu leisten.
                    </p>
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
                    <span class="font-bold">Aamir Shaheen - Geschäftsführer</span>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full py-[60px] px-6" id="uberuns">
        <div class="max-w-[90%] m-auto grid grid-cols-2 gap-6">
            <div class="w-full">
                <h2 class="text-dark text-4xl mb-4">Warum GFC Europe
                    <strong class="link text-primary">wählen?</strong>
                </h2>
                <ul class="ml-7 list-disc">
                    <li class="mb-2">Fachwissen über deutsche Solarvorschriften</li>
                    <li class="mb-2">Umfassende Bauleitung und Projektmanagement</li>
                    <li class="mb-2">Individuelle Lösungen für jeden Kunden</li>
                    <li class="mb-2">Engagement für Nachhaltigkeit</li>
                    <li>Erfolgreiche Umsetzung zahlreicher Solarprojekte</li>
                </ul>
            </div>
            <div class="w-full font-medium">
                <p class="leading-8 mb-4">Bei GFC Europe sind wir Ihre Partner für die Planung und Realisierung
                    energieeffizienter Solarparks, die
                    sowohl wirtschaftlich als auch ökologisch überzeugen. Egal ob Sie Unterstützung bei der Planung,
                    Genehmigung
                    oder Bauleitung benötigen – wir begleiten Sie auf dem Weg zu einer sauberen Energiezukunft.</p>
                <p class="leading-8">Kontaktieren Sie uns noch heute und lassen Sie uns gemeinsam Ihr Grundstück in
                    eine leistungsstarke
                    Quelle
                    für erneuerbare Energien verwandeln!</p>
            </div>
        </div>
    </section>


    <section class="w-full py-[60px] px-6">
        <div class="max-w-[90%] m-auto">
            <h2 class="text-dark text-[70px] leading-[80px]">Umweltfreundliche <br> Energie durch <br><strong
                    class="link text-primary">Solarpanels.</strong></h2>
        </div>
    </section>

    <section class="w-full py-[60px] px-6 bg-gray-50 border-t border-gray-100" id="dienstleistungen">
        <div class="max-w-[90%] m-auto">
            <div class="grid grid-cols-3 gap-7">
                <div class="p-6 col-span-2">
                    <h2 class="text-dark text-3xl mb-4">Unsere <strong class="link text-primary">Dienstleistungen</strong>
                    </h2>
                    <div class="flex flex-col rounded-lg bg-white p-6 mb-8">
                        <div class="flex">
                            <div
                                class="w-[120px] h-[80px] rounded-full flex mr-6 items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/icons/residential-solar-panels.png') }}"
                                    alt="Standortbewertung & Machbarkeitsstudien" width="30">
                            </div>
                            <div class="flex flex-col pt-1">
                                <span class="font-semibold">Standortbewertung & Machbarkeitsstudien:</span>
                                <p class="text-grade text-sm">Wir prüfen das Potenzial Ihres Grundstücks für die
                                    Solarstromerzeugung unter Berücksichtigung von Faktoren wie Sonneneinstrahlung,
                                    Topografie und Netzanschluss, um den Ertrag zu maximieren.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col rounded-lg bg-white p-6 mb-8">
                        <div class="flex">
                            <div
                                class="w-[125px] h-[80px] rounded-full flex mr-6 items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/icons/industrial-solar-panels.png') }}"
                                    alt="Genehmigungen & Regulatorische Konformität: " width="30">
                            </div>
                            <div class="flex flex-col pt-1">
                                <span class="font-semibold">Genehmigungen & Regulatorische Konformität: </span>
                                <p class="text-grade text-sm">Der Umgang mit den komplexen Vorschriften in Deutschland kann
                                    herausfordernd sein. Wir kümmern uns um alle rechtlichen, umwelttechnischen und
                                    baurechtlichen Anforderungen, um einen reibungslosen Projektablauf sicherzustellen.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col rounded-lg bg-white p-6 mb-8">
                        <div class="flex">
                            <div
                                class="w-[110px] h-[80px] rounded-full flex mr-6 items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/icons/blueprint.png') }}" alt="Design & Planung" width="30">
                            </div>
                            <div class="flex flex-col pt-1">
                                <span class="font-semibold">Design & Planung:</span>
                                <p class="text-grade text-sm">Unser erfahrenes Team entwickelt maßgeschneiderte
                                    Solarpark-Designs, die modernste Technologien nutzen, um eine optimale Leistung,
                                    Energieausbeute und Rentabilität zu gewährleisten.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col rounded-lg bg-white p-6 mb-8">
                        <div class="flex">
                            <div
                                class="w-[170px] h-[80px] rounded-full mr-6 flex items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/icons/supervision.png') }}" alt="Bauleitung (Bauüberwachung)"
                                    width="30">
                            </div>
                            <div class="flex flex-col pt-1">
                                <span class="font-semibold">Bauleitung (Bauüberwachung):</span>
                                <p class="text-grade text-sm">Wir bieten vollständige Bauleitungsdienste an, um jede Phase
                                    der Bauausführung zu überwachen. Unser Team koordiniert Auftragnehmer, verwaltet
                                    Zeitpläne, kontrolliert Budgets und stellt sicher, dass alle Bauarbeiten den höchsten
                                    Qualitäts-, Sicherheits- und Konformitätsstandards entsprechen.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col rounded-lg bg-white p-6 mb-8">
                        <div class="flex">
                            <div
                                class="w-[100px] h-[70px] rounded-full flex mr-6 items-center justify-center bg-primary/10">
                                <img src="{{ asset('assets/icons/power-generation.png') }}"
                                    alt="Netzanschluss & Langfristige Unterstützung" width="30">
                            </div>
                            <div class="flex flex-col pt-1">
                                <span class="font-semibold">Netzanschluss & Langfristige Unterstützung:</span>
                                <p class="text-grade text-sm">Unser technisches Team sorgt für einen reibungslosen
                                    Netzanschluss und bietet langfristige Betriebsunterstützung, damit Ihr Solarpark über
                                    die gesamte Lebensdauer hinweg effizient funktioniert.
                                </p>
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
        <h2 class="text-white text-[70px] leading-[80px] relative z-10 text-center">Wir plannen
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
                <p class="text-grade">Wenn Sie Solarpanels nutzen, sparen Sie innerhalb eines Jahres Millionen, da Sie
                    keine
                    Stromkosten zahlen müssen.</p>
            </div>
            <div class="w-full border-l border-gray-100 py-12 px-12">
                <h3 class="mb-4">Rettet die Erde</h3>
                <p class="text-grade">Mit dieser Innovation hoffen wir natürlich, die Erde vor der globalen Erwärmung und
                    anderen Gefahren zu schützen.</p>
            </div>
        </div>
    </section>

    <section class="w-full py-[60px] px-6 bg-gray-50 border-t border-gray-100" id="team">
        <h2 class="text-[70px] leading-[80px] relative z-10 text-center mb-4">
            Unsere <strong class="link text-primary">Teammitglieder<br></strong>
        </h2>
        <div class="max-w-[60%] m-auto grid grid-cols-3 gap-8">
            <div class="hover:scale-110 transition-all w-full border-r border-gray-100 py-12 px-12 h-[500px] bg-cover bg-center relative rounded-xl overflow-hidden"
                style="background-image: url('{{ asset('assets/team/2ef0bdf1-4a84-42dd-b073-f6c2fbc15ccd.jfif') }}')">
                <div class="absolute bottom-0 left-0 p-4 bg-black/60 backdrop-blur-sm w-full">
                    <div class="flex flex-col text-white">
                        <span class="text-2xl font-semibold">Celal Ipek</span>
                        <span>Projektleiter</span>
                    </div>
                </div>
            </div>

            <div class="hover:scale-110 transition-all w-full border-r border-gray-100 py-12 px-12 h-[500px] bg-cover bg-center relative rounded-xl overflow-hidden"
                style="background-image: url('{{ asset('assets/team/5d8d257d-310f-4b6b-8d77-f967ad4e7f50.jfif') }}')">
                <div class="absolute bottom-0 left-0 p-4 bg-black/60 backdrop-blur-sm w-full">
                    <div class="flex flex-col text-white">
                        <span class="text-2xl font-semibold">Aamir Shaheen</span>
                        <span>Geschäftsführer</span>
                    </div>
                </div>
            </div>

            <div class="hover:scale-110 transition-all w-full border-r border-gray-100 py-12 px-12 h-[500px] bg-cover bg-center relative rounded-xl overflow-hidden"
                style="background-image: url('{{ asset('assets/team/ahmer.jfif') }}')">
                <div class="absolute bottom-0 left-0 p-4 bg-black/60 backdrop-blur-sm w-full">
                    <div class="flex flex-col text-white">
                        <span class="text-2xl font-semibold">Ahmer Tahir</span>
                        <span>Digital-Marketing-Manager</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
