{{--@include('layouts.navigation_auth')--}}

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Custom Styles -->
    <style>
        .small-box {
            border-radius: 0.25rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            display: block;
            margin-bottom: 20px;
            position: relative;
        }
        .small-box > .inner {
            padding: 10px;
        }
        .small-box > .small-box-footer {
            background: rgba(0, 0, 0, 0.1);
            color: #fff;
            display: block;
            padding: 3px 0;
            position: relative;
            text-align: center;
            text-decoration: none;
            z-index: 10;
        }
        .small-box:hover .small-box-footer {
            background: rgba(0, 0, 0, 0.15);
            color: #fff;
        }
        .small-box h3, .small-box p {
            z-index: 5;
        }
        .small-box h3 {
            font-size: 38px;
            font-weight: bold;
            margin: 0 0 10px 0;
            padding: 0;
            white-space: nowrap;
        }
        .small-box p {
            font-size: 15px;
        }
        .small-box .icon {
            color: rgba(0, 0, 0, 0.15);
            z-index: 0;
        }
        .small-box .icon > i {
            font-size: 90px;
            position: absolute;
            right: 15px;
            top: 15px;
            transition: transform 0.3s linear;
        }
        .small-box:hover .icon > i {
            transform: scale(1.1);
        }
    </style>
</head>
<body class="font-sans antialiased">
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Admin Dashboard
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                {{--                <ul class="navbar-nav mr-auto">--}}
                {{--                    <li class="nav-item">--}}
                {{--                        <a class="nav-link" href="{{ url('/form1') }}">Contact</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item">--}}
                {{--                        <a class="nav-link" href="{{ url('/form2') }}">Formulier 2</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item">--}}
                {{--                        <a class="nav-link" href="{{ url('/form3') }}">Formulier 3</a>--}}
                {{--                    </li>--}}
                {{--                </ul>--}}

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>
                        <div class="card-body">
                            <div class="row">
                                <!-- Eerste Box -->
                                <div class="col-md-4">
                                    <div class="card text-center">
                                        <div class="card-header">
                                            Contact
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Contact gegevens</h5>
                                            <p class="card-text">Hier kan je de openingstijden , adres en telefoonnummer veranderen.</p>
                                            <a href="{{ route('contact.edit') }}" class="btn btn-primary">Bewerk</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tweede Box -->
                                <div class="col-md-4">
                                    <div class="card text-center">
                                        <div class="card-header">
                                            FAQ
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">FAQ</h5>
                                            <p class="card-text">....</p>
                                            <a href="#" class="btn btn-primary">Bewerk</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Derde Box -->
                                <div class="col-md-4">
                                    <div class="card text-center">
                                        <div class="card-header">
                                            Afbeelding
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Afbeelding</h5>
                                            <p class="card-text">.........</p>
                                            <a href="#" class="btn btn-primary">Bewerk</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            Uitleg over het aanpassen
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
