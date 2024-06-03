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
                <h3 class="heading_text mb-0 wow" data-splitting>Contact</h3>
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
                            @foreach (explode(',', $contactDetail->daytime_hours) as $daytime_hour)
                                @php
                                    list($day, $hours) = explode(':', $daytime_hour);
                                @endphp
                                <li>
                                    <span class="info_text d-flex align-items-center justify-content-between">
                                        <span>{{ $day }}</span>
                                        <span>{{ $hours }}</span>
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact_info_box">
                        <h3 class="item_title">Openingstijden 's avonds</h3>
                        <ul class="info_list unordered_list_block">
                            @foreach (explode(',', $contactDetail->evening_hours) as $evening_hour)
                                @php
                                    list($day, $hours) = explode(':', $evening_hour);
                                @endphp
                                <li>
                                    <span class="info_text d-flex align-items-center justify-content-between">
                                        <span>{{ $day }}</span>
                                        <span>{{ $hours }}</span>
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-12">
                    <div class="gmap_canvas">
                        <iframe src="https://www.google.com/maps/embed/v1/place?q={{ urlencode($contactDetail->address) }}&key=YOUR_GOOGLE_MAPS_API_KEY"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section - End
    ================================================== -->

  </main>
@endsection
