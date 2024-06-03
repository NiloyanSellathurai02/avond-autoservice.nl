@extends('layouts.app')

@section('content')
<section class="hero_section hero_section_3">
    <div class="container">
        <div class="row justify-content-lg-between">
            <div class="col-lg-5">
                <div class="hero_section_content">
                    <h1 class="hero_title wow" data-splitting>Welkom bij Avond Autoservice</h1>
                    <p>
                        Rijd zorgeloos, wij doen de rest. Uw vertrouwde autogarage voor elk kilometer.
                    </p>
                    <a class="btn btn-primary" href="{{ url('service') }}">
                        <span class="btn_text">Bekijk diensten</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="recommendations_area">
                    <h2 class="area_title">Onderhoudsschema</h2>
                    <div class="workprocess_item">
                        <h3 class="item_title">
                            <span class="serial_number">01</span>
                            <span class="title_text">Grote beurt</span>
                        </h3>
                        <p class="mb-0 p-0">
                            Elke 30.000 km of na 2 jaar (wat het eerst komt).
                        </p>
                    </div>
                    <div class="workprocess_item">
                        <h3 class="item_title">
                            <span class="serial_number">02</span>
                            <span class="title_text">Kleine beurt</span>
                        </h3>
                        <p class="mb-0 p-0">
                            Elke 15.000 km of elk jaar (wat het eerst komt).
                        </p>
                    </div>
                </div>
                <div class="video_wrap text-center" style="background-image: url('{{ asset('assets/images/video/video_poster_1.png') }}');">
                    <a class="video_play_btn popup_video" href="https://www.youtube.com/watch?v=6iJM4Q2J1rg">
                        <i class="fa-duotone fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="hero_section_image">
            <img src="{{ asset('assets/images/hero/hero_image_700.png') }}" alt="Avond Autoservice">
        </div>
    </div>
    <div class="outline_text" data-parallax='{"x" : 200, "smoothness": 8}'>Avond Autoservice</div>
</section>
<!-- Hero Section - End ================================================== -->

<!-- Brand Logo Section - Start ================================================== -->
<div class="brand_logo_section text-center">
    <div class="brand_logo_carousel brand_logo_blur_effect row align-items-center" data-slick='{"dots":false, "arrows": false}'>
        <div class="col-">
            <a class="brand_logo_item">
                <img src="{{ asset('assets/images/brands/brand_logo_img_vw.svg') }}" alt="VW Logo">
            </a>
        </div>
        <div class="col-">
            <a class="brand_logo_item">
                <img src="{{ asset('assets/images/brands/brand_logo_img_bmw.png') }}" alt="BMW Logo">
            </a>
        </div>
        <div class="col-">
            <a class="brand_logo_item">
                <img src="{{ asset('assets/images/brands/brand_logo_img_alfa.png') }}" alt="ALFA Logo">
            </a>
        </div>
        <div class="col-">
            <a class="brand_logo_item">
                <img src="{{ asset('assets/images/brands/brand_logo_img_skoda.png') }}" alt="SKODA Logo">
            </a>
        </div>
        <div class="col-">
            <a class="brand_logo_item">
                <img src="{{ asset('assets/images/brands/brand_logo_img_LL.png') }}" alt="LAND ROVER Logo">
            </a>
        </div>
        <div class="col-">
            <a class="brand_logo_item">
                <img src="{{ asset('assets/images/brands/brand_logo_img_volvo.png') }}" alt="VOLVO Logo">
            </a>
        </div>
        <div class="col-">
            <a class="brand_logo_item">
                <img src="{{ asset('assets/images/brands/brand_logo_img_nissan.png') }}" alt="NISSAN Logo">
            </a>
        </div>
        <div class="col-">
            <a class="brand_logo_item">
                <img src="{{ asset('assets/images/brands/brand_logo_img_opel.png') }}" alt="OPEL Logo">
            </a>
        </div>
        <div class="col-">
            <a class="brand_logo_item">
                <img src="{{ asset('assets/images/brands/brand_logo_img_peugot.png') }}" alt="PEUGOT Logo">
            </a>
        </div>
        <div class="col-">
            <a class="brand_logo_item">
                <img src="{{ asset('assets/images/brands/brand_logo_img_audi.svg') }}" alt="AUDI Logo">
            </a>
        </div>
        <div class="col-">
            <a class="brand_logo_item">
                <img src="{{ asset('assets/images/brands/brand_logo_img_seat.png') }}" alt="SEAT Logo">
            </a>
        </div>
        <div class="col-">
            <a class="brand_logo_item">
                <img src="{{ asset('assets/images/brands/brand_logo_img_honda.png') }}" alt="HONDA Logo">
            </a>
        </div>
        <div class="col-">
            <a class="brand_logo_item">
                <img src="{{ asset('assets/images/brands/brand_logo_img_toyota.png') }}" alt="TOYOTA Logo">
            </a>
        </div>
        <div class="col-">
            <a class="brand_logo_item">
                <img src="{{ asset('assets/images/brands/brand_logo_img_citroen.svg') }}" alt="CITROEN Logo">
            </a>
        </div>
        <div class="col-">
            <a class="brand_logo_item">
                <img src="{{ asset('assets/images/brands/brand_logo_img_fiat.png') }}" alt="FIAT Logo">
            </a>
        </div>
        <div class="col-">
            <a class="brand_logo_item">
                <img src="{{ asset('assets/images/brands/brand_logo_img_kia.png') }}" alt="KIA Logo">
            </a>
        </div>
        <div class="col-">
            <a class="brand_logo_item">
                <img src="{{ asset('assets/images/brands/brand_logo_img_mercedes.png') }}" alt="MERCEDES Logo">
            </a>
        </div>
        <div class="col-">
            <a class="brand_logo_item">
                <img src="{{ asset('assets/images/brands/brand_logo_img_porsche.png') }}" alt="PORSCHE Logo">
            </a>
        </div>
    </div>
</div>
<!-- Brand Logo Section - End ================================================== -->

<!-- About Section - Start ================================================== -->
<section class="about_section section_space_lg pb-0">
    <div class="container">
        <div class="section_heading text-center">
            <h2 class="heading_text wow mb-0" data-splitting>Uw Auto, Onze Zorg!</h2>
        </div>
        <ul class="nav tab_nav unordered_list_center" role="tablist">
            <li role="presentation">
                <button class="active" data-bs-toggle="tab" data-bs-target="#tab_cooling_system" type="button" role="tab" aria-selected="true">
                    <span class="btn_icon">
                        <img src="{{ asset('assets/images/icons/icon_apk1.svg') }}" alt="APK Icon">
                    </span>
                    <span class="btn_text">APK</span>
                </button>
            </li>
            <li role="presentation">
                <button data-bs-toggle="tab" data-bs-target="#tab_tire_repair" type="button" role="tab" aria-selected="false">
                    <span class="btn_icon">
                        <img src="{{ asset('assets/images/icons/icon_steering.svg') }}" alt="Reparatie Icon">
                    </span>
                    <span class="btn_text">Onderhoud & reparatie</span>
                </button>
            </li>
            <li role="presentation">
                <button data-bs-toggle="tab" data-bs-target="#tab_steering_repair" type="button" role="tab" aria-selected="false">
                    <span class="btn_icon">
                        <img src="{{ asset('assets/images/icons/icon_diagnose.svg') }}" alt="Engine Icon">
                    </span>
                    <span class="btn_text">Storingdiagnose</span>
                </button>
            </li>
            <li role="presentation">
                <button data-bs-toggle="tab" data-bs-target="#Tab_engine_repair" type="button" role="tab" aria-selected="false">
                    <span class="btn_icon">
                        <img src="{{ asset('assets/images/icons/icon_lever.svg') }}" alt="Onderhoud Icon">
                    </span>
                    <span class="btn_text">Bedrijfswagen onderhoud</span

>
                </button>
            </li>
        </ul>
        <div class="tab-content" style="background-image: url('{{ asset('assets/images/shapes/tyre_print_5.svg') }}');">
            <div class="tab-pane fade show active" id="tab_cooling_system" role="tabpanel">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="item_content">
                            <h3 class="title_text">Algemene Periodieke Keuring (APK)</h3>
                            <p>
                                Het uitvoeren van een Algemene Periodieke Keuring (APK) is niet alleen een wettelijke verplichting, maar ook essentieel voor uw veiligheid en het milieu. Bij Avond Autoservice kunt u vertrouwen op mijn deskundige en betrouwbare service.
                            </p>
                            <h4 class="list_title">Wat wordt er gecontroleerd tijdens de APK?</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="info_list unordered_list_block text-uppercase">
                                        <li>
                                            <span class="info_icon">
                                                <i class="fa-light fa-minus"></i>
                                            </span>
                                            <span class="info_text">Controle van de kilometerstand</span>
                                        </li>
                                        <li>
                                            <span class="info_icon">
                                                <i class="fa-light fa-minus"></i>
                                            </span>
                                            <span class="info_text">Onderhoud onder de motorkap</span>
                                        </li>
                                        <li>
                                            <span class="info_icon">
                                                <i class="fa-light fa-minus"></i>
                                            </span>
                                            <span class="info_text">Verlichting van de auto</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="info_list unordered_list_block text-uppercase">
                                        <li>
                                            <span class="info_icon">
                                                <i class="fa-light fa-minus"></i>
                                            </span>
                                            <span class="info_text">Ruitenwissers</span>
                                        </li>
                                        <li></li>
                                        <ul class="info_list unordered_list_block text-uppercase">
                                            <li>
                                                <span class="info_icon">
                                                    <i class="fa-light fa-minus"></i>
                                                </span>
                                                <span class="info_text">Inspectie van de onderzijde van de auto</span>
                                            </li>
                                            <li>
                                                <span class="info_icon">
                                                    <i class="fa-light fa-minus"></i>
                                                </span>
                                                <span class="info_text">Bandencontrole</span>
                                            </li>
                                            <li></li>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item_image">
                            <img src="{{ asset('assets/images/products/apkk.png') }}" alt="APK Keuring">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab_tire_repair" role="tabpanel">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="item_content">
                            <h3 class="title_text">AUTO REPARATIE EN ONDERHOUD BIJ Avond Autoservice</h3>
                            <p>
                                Regelmatig onderhoud van uw auto is cruciaal voor de levensduur en veiligheid van uw voertuig. Bij Avond Autoservice bent u aan het juiste adres voor professioneel onderhoud. Wij zorgen altijd voor een duidelijke prijsopgave vooraf, zodat u precies weet wat de kosten zijn en niet voor verrassingen komt te staan. Of het nu gaat om het verversen van olie, het vervangen van banden, een grote onderhoudsbeurt of een kleine inspectie, Avond Autoservice biedt de beste service voor uw auto.
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="info_list unordered_list_block text-uppercase">
                                        <li>
                                            <span class="info_icon">
                                                <i class="fa-light fa-minus"></i>
                                            </span>
                                            <span class="info_text">Kleine beurt</span>
                                        </li>
                                        <li>
                                            <span class="info_icon">
                                                <i class="fa-light fa-minus"></i>
                                            </span>
                                            <span class="info_text">Grote beurt</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="info_list unordered_list_block text-uppercase">
                                        <li>
                                            <span class="info_icon">
                                                <i class="fa-light fa-minus"></i>
                                            </span>
                                            <span class="info_text">Aankoop inspectie</span>
                                        </li>
                                        <li>
                                            <span class="info_icon">
                                                <i class="fa-light fa-minus"></i>
                                            </span>
                                            <span class="info_text">Vakantiecheck</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item_image">
                            <img src="{{ asset('assets/images/products/onderhoud.webp') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab_steering_repair" role="tabpanel">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="item_content">
                            <h3 class="title_text">Probleem met uw auto?</h3>
                            <p>
                                Wanneer er een probleem is met een van de systemen van uw auto, ziet u meestal brandende controlelampjes op het dashboard en hoort u waarschuwingsgeluiden. Deze storing of foutmelding wordt automatisch opgeslagen in het elektronische geheugen van uw voertuig. Bij Avond Autoservice lezen we deze informatie nauwkeurig uit en zorgen we voor een snelle en effectieve oplossing.
                            </p>
                            <h4 class="list_title">Wat wordt er uitgevoerd tijdens een diagnose?:</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="info_list unordered_list_block text-uppercase">
                                        <li>
                                            <span class="info_icon">
                                                <i class="fa-light fa-minus"></i>
                                            </span>
                                            <span class="info_text">Storingsdiagnose uitlezen</span>
                                        </li>
                                        <li>
                                            <span class="info_icon">
                                                <i class="fa-light fa-minus"></i>
                                            </span>
                                            <span class="info_text">Oplossing aanbieden voor storing</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item_image">
                            <img src="{{ asset('assets/images/products/diagnose.webp') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="Tab_engine_repair" role="tabpanel">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="item_content">
                            <h3 class="title_text">Vakmensen voor vakmensen</h3>
                            <p>
                                Als ondernemer moet u volledig kunnen vertrouwen op uw bedrijfsauto. Het is immers uw bron van inkomsten en elke stilstand betekent direct verlies van omzet. Bij Avond Autoservice begrijpen we dit als geen ander. Daarom is onze werkplaats speciaal uitgerust voor het onderhoud van lichte bedrijfsauto's en het snel en vakkundig verhelpen van storingen of defecten.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item_image">
                            <img src="{{ asset('assets/images/products/bedrijfswagen.webp') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section - End ================================================== -->

<!-- Work Process Section - Start ================================================== -->
<section class="workprocess_section section_space_lg pb-0">
    <div class="container">
        <div class="row justify-content-lg-between">
            <div class="col-lg-5">
                <div class="section_heading">
                    <h2 class="heading_text wow mb-lg-0" data-splitting>Hoe wij te werk gaan</h2>
                    <p class="heading_description mb-0 d-lg-none"></p>
                </div>
                <div class="workprocess_item">
                    <h3 class="item_title">
                        <span class="serial_number">01</span>
                        <span class="title_text">Afspraak overdag</span>
                    </h3>
                    <p class="mb-0">
                        Plan eenvoudig via WhatsApp of telefoon. Breng uw voertuig op tijd en wij zorgen voor snelle, efficiënte service, zodat u zonder onderbrekingen verder kunt.
                    </p>
                </div>
                <div class="workprocess_item">
                    <h3 class="item_title">
                        <span class="serial_number">02</span>
                        <span class="title_text">Afspraak 's Avonds</span>
                    </h3>
                    <p class="mb-0">
                        Plan een avondafspraak via WhatsApp of telefoon en kom op het geplande tijd

stip. Wij verzorgen uw auto tijdens onze avonduren.</p>
                    <p class="mb-0">
                        <br><b>Belangrijk:</b> Onze onderdelenleverancier is 's avonds gesloten. Bel op tijd voor onderdelen of breng uw eigen mee.
                    </p>
                </div>
                <div class="workprocess_item">
                    <h3 class="item_title">
                        <span class="serial_number">03</span>
                        <span class="title_text">Onderdelen Aanleveren of Laten Leveren</span>
                    </h3>
                    <p class="mb-0">
                        Laat ons weten bij het maken van uw afspraak of u zelf onderdelen meebrengt. Breng deze mee op de dag van uw bezoek. Wilt u dat wij leveren? Geef uw wensen vooraf door.
                    </p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section_heading">
                    <p class="heading_description d-none d-lg-block">
                        Bij Avond Autoservice staan we voor u klaar, zowel overdag als 's avonds. Onze unieke openingstijden maken het mogelijk dat u, ongeacht uw eigen planning, altijd bij ons terecht kunt. Dit betekent dat u uw auto kunt laten onderhouden of repareren wanneer het u uitkomt, zonder uw dagelijkse bezigheden te onderbreken.
                    </p>
                    <div class="funfact_wrapper bg_primary">
                        <div class="funfact_item d-flex">
                            <div class="counter_value">
                                <span class="odometer" data-count="100">0</span>
                                <span>+</span>
                            </div>
                            <p class="counter_description mb-0">
                                Tevreden klanten
                            </p>
                        </div>
                        <div class="funfact_item d-flex">
                            <div class="counter_value">
                                <span class="odometer" data-count="99">0</span>
                                <span>%</span>
                            </div>
                            <p class="counter_description mb-0">
                                Klanttevredenheid
                            </p>
                        </div>
                    </div>
                </div>
                <div class="image_widget">
                    <img src="{{ asset('assets/images/about/about_image_4.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Work Process Section - End ================================================== -->

<!-- Testimonial Section - Start ================================================== -->
<section class="testimonial_section section_space_sm">
    <div class="container">
        <div class="section_heading">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="outline_text">Wat onze klanten zeggen:</div>
                    <h2 class="heading_text mb-0 wow" data-splitting>Recensies</h2>
                </div>
                <div class="col-lg-6 d-none d-lg-flex justify-content-end">
                    <ul class="carousel_arrow unordered_list">
                        <li>
                            <button type="button" class="c3c_arrow_left">
                                <i class="fa-regular fa-angle-left"></i>
                                <i class="fa-regular fa-angle-left"></i>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="c3c_arrow_right">
                                <i class="fa-regular fa-angle-right"></i>
                                <i class="fa-regular fa-angle-right"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="testimonial_carousel">
            <div class="testimonial_item_boxed carousel_3col row" data-slick='{"dots": false}'>
                <div class="col-">
                    <div class="testimonial_item bg-transparent">
                        <h3 class="item_title">
                            <span class="quote_icon"><i class="fa-solid fa-quote-right"></i></span>
                            <span class="title_text"></span>
                        </h3>
                        <p class="testimonial_content mb-0">
                            Ik kon na bellen meteen de volgende dag langskomen.
                            Deed het voor 3x goedkoper dan de garage waar ik daarvoor was.
                            Ik ga dus voortaan altijd hierheen.
                        </p>
                        <div class="admin_wrap">
                            <h4 class="admin_name">Joey Herben</h4>
                            <ul class="rating_star unordered_list">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-">
                    <div class="testimonial_item bg-transparent">
                        <h3 class="item_title">
                            <span class="quote_icon"><i class="fa-solid fa-quote-right"></i></span>
                            <span class="title_text"></span>
                        </h3>
                        <p class="testimonial_content mb-0">
                            De eigenaar is zeer kundig, klantvriendelijk en levert uitstekend werk af.
                            Heel blij eindelijk een goede betrouwbare garage gevonden te hebben.
                            Dank, de Ford focus rijdt weer als een zonnetje!
                        </p>
                        <div class="admin_wrap">
                            <h4 class="admin_name">Miriam de Beus</h4>
                            <ul class="rating_star unordered_list">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-">
                    <div class="testimonial_item bg-transparent">
                        <h3 class="item_title">
                            <span class="quote_icon"><i class="fa-solid fa-quote-right"></i></span>
                            <span class="title_text"></span>
                        </h3>
                        <p class="testimonial_content mb-0">
                            De eigenaar van deze garage is zeer vakkundig en vriendelijk. Hij gaf eerlijk advies en een goede service. Het probleem aan mijn auto was snel verholpen. Een garage met een betere prijs/kwaliteit verhouding kan je niet vinden. Ik kan deze garage zeker aanbevelen.
                        </p>
                        <div class="admin_wrap">
                            <h4 class="admin_name">Tobias Van Stelten</h4>
                            <ul class="rating_star unordered_list">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-">
                    <div class="testimonial_item bg-transparent">
                        <h3 class="item_title">
                            <span class="quote_icon"><i class="fa-solid fa-quote-right"></i></span>
                            <span class="title_text"></span>
                        </h3>
                        <p class="testimonial_content mb-0">
                            Deze man heeft mij binnen 1 uur uit de brand geholpen.
                            Weet waar hij over praat en niet duur. Aanrader.
                        </p>
                        <div class="admin_wrap">
                            <h4 class="admin_name">Ernst Sodekampff</h4>
                            <ul class="rating_star unordered_list">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-">
                    <div class="testimonial_item bg-transparent">
                        <h3 class="item_title">
                            <span class="quote_icon"><i class="fa-solid fa-quote-right"></i></span>
                            <span class="title_text"></span>
                        </h3>
                        <p class="testimonial_content mb-0">
                            Een topmonteur… eerlijk en geeft de juiste advies. Zéér behulpzaam en staat klaar voor de klanten.
                            Mijn complimenten.
                        </p>
                        <div class="admin_wrap">
                            <h4 class="admin_name">BRN Nanhoe</h4>
                            <ul class="rating_star unordered_list">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div

 class="col-">
                    <div class="testimonial_item bg-transparent">
                        <h3 class="item_title">
                            <span class="quote_icon"><i class="fa-solid fa-quote-right"></i></span>
                            <span class="title_text"></span>
                        </h3>
                        <p class="testimonial_content mb-0">
                            Vriendelijk, goede service & advies. Auto werd die middag nog gemaakt. Dankbaar 🙏🏻
                        </p>
                        <div class="admin_wrap">
                            <h4 class="admin_name">Marije Vesters</h4>
                            <ul class="rating_star unordered_list">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p></p>
        <div class="btn_wrap text-center d-lg-none d-block">
            <ul class="carousel_arrow unordered_list_center">
                <li>
                    <button type="button" class="c3c_arrow_left">
                        <i class="fa-regular fa-angle-left"></i>
                        <i class="fa-regular fa-angle-left"></i>
                    </button>
                </li>
                <li>
                    <button type="button" class="c3c_arrow_right">
                        <i class="fa-regular fa-angle-right"></i>
                        <i class="fa-regular fa-angle-right"></i>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Testimonial Section - End ================================================== -->

 <!-- Contact Section - Start
    ================================================== -->
    <section class="contact_section section_space_sm">
        <div class="container">
            <div class="section_heading">
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact_info_box">
                        <h3 class="item_title">Adres</h3>
                        <ul class="info_list unordered_list_block pe-lg-2">
                            <li>
                                <span class="info_text mb-3">
                                    Avond Autoservice
                                </span>
                                <span class="info_text mb-3">
                                    {{ $contactDetail->address ?? 'Geen adres beschikbaar' }}
                                </span>
                            </li>
                            <li>
                                <span class="info_text mb-3">
                                    <span class="d-block">
                                        <a href="tel:{{ $contactDetail->phone ?? '#' }}"> Tel: {{ $contactDetail->phone ?? 'Geen telefoonnummer beschikbaar' }}</a>
                                    </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact_info_box">
                        <h3 class="item_title">Openingstijden overdag</h3>
                        <ul class="info_list unordered_list_block">
                            <li>
                                <span class="info_text d-flex align-items-center justify-content-between">
                                    <span>Maandag - Vrijdag</span>
                                    <span>{{ $contactDetail->daytime_hours ?? 'Geen openingstijden beschikbaar' }}</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact_info_box">
                        <h3 class="item_title">Openingstijden 's avonds</h3>
                        <ul class="info_list unordered_list_block">
                            <li>
                                <span class="info_text d-flex align-items-center justify-content-between">
                                    <span>Maandag - Vrijdag</span>
                                    <span>{{ $contactDetail->evening_hours ?? 'Geen openingstijden beschikbaar' }}</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="gmap_canvas">
                        <iframe src="https://www.google.com/maps/embed/v1/place?q={{ urlencode($contactDetail->address ?? 'Almere') }}&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section - End
    ================================================== -->
@endsection
