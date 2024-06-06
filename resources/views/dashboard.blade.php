{{--@include('layouts.navigation_auth')--}}
{{--<main class="py-4">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">{{ __('Dashboard') }}</div>--}}
{{--                    <div class="small-box">--}}
{{--                        <h1>Uitleg over het aanpassen</h1>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</main>--}}

@include('layouts.navigation_auth')
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
                                        <p class="card-text">Hier kan </p>
                                        <a href="{{ route('contact.edit') }}" class="btn btn-primary">Bewerk</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Tweede Box -->
                            <div class="col-md-4">
                                <div class="card text-center">
                                    <div class="card-header">
                                        Box 2
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Edit Box 2</h5>
                                        <p class="card-text">Korte uitleg over Box 2.</p>
{{--                                        <a href="{{ route('#') }}" class="btn btn-primary">Bewerk</a>--}}
                                    </div>
                                </div>
                            </div>
                            <!-- Derde Box -->
                            <div class="col-md-4">
                                <div class="card text-center">
                                    <div class="card-header">
                                        Box 3
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Edit Box 3</h5>
                                        <p class="card-text">Korte uitleg over Box 3.</p>
{{--                                        <a href="{{ route('#') }}" class="btn btn-primary">Bewerk</a>--}}
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
