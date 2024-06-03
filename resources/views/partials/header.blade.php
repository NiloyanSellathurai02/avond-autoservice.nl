<header class="site_header">
    <div class="header_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-5">
                    <div class="site_logo">
                        <a class="site_link" href="{{ url('/') }}">
                            <img class="dark_theme_logo" src="{{ asset('assets/images/site_logo/dark_theme_site_logo.png') }}" alt="Avond Autoservice">
                            <img class="light_theme_logo" src="{{ asset('assets/images/site_logo/light_theme_site_logo.png') }}" alt="Avond Autoservice">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-2">
                    <nav class="main_menu navbar navbar-expand-lg">
                        <div class="main_menu_inner collapse navbar-collapse justify-content-center" id="main_menu_dropdown">
                            <ul class="main_menu_list unordered_list_center">
                                <li class="{{ request()->is('/') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="{{ request()->is('service') ? 'active' : '' }}">
                                    <a href="{{ url('/service') }}">Diensten</a>
                                </li>
                                <li class="{{ request()->is('about') ? 'active' : '' }}">
                                    <a href="{{ url('/about') }}">Over ons</a>
                                </li>
                                <li class="{{ request()->is('portfolio') ? 'active' : '' }}">
                                    <a href="{{ url('/portfolio') }}">De werkruimte</a>
                                </li>
                                <li class="{{ request()->is('contact') ? 'active' : '' }}">
                                    <a href="{{ url('/contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                </div>
                <div class="col-lg-3 col-5">
                    <ul class="header_btns_group unordered_list_end">
                        <li>
                            <button class="mobile_menu_btn" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu_dropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="far fa-bars"></i>
                            </button>
                        </li>
                        <li>
                            <div class="mode-switch" data-bs-toggle="mode" data-cursor="-opaque" data-magnetic>
                                <input id="theme-mode-btn" type="checkbox">
                            </div>
                        </li>
                        <li>
                            <a class="btn btn-primary" href="tel:+06 39565379">
                                <span class="btn_text" data-text="+06 39565379">Tel: +31 639565379</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
