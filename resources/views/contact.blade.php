@extends('layouts.app')

@section('content')

<main class="page_content">

    <!-- Page Banner - Start
    ================================================== -->
    <section class="page_banner" style="background-image: url('assets/images/shapes/tyre_print_3.svg');">
      <div class="container">
        <h1 class="page_title wow" data-splitting>Neem contact op</h1>
      </div>
    </section>
    <!-- Page Banner - End
    ================================================== -->

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
                                    {{ $contactDetail->address }}
                                </span>
                            </li>
                            <li>
                                <span class="info_text mb-3">
                                    <span class="d-block">
                                        <a href="tel:{{ $contactDetail->phone }}"> Tel: {{ $contactDetail->phone }}</a>
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
{{--                                    <span>Maandag - Vrijdag</span>--}}
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
{{--                                    <span>Maandag - Vrijdag</span>--}}
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

  </main>
@endsection
