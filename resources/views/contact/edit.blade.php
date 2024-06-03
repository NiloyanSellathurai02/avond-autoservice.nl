@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Contactgegevens bewerken</h1>
    <form action="{{ route('contact.update') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="address">Adres</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $contactDetail->address }}">
        </div>
        <div class="form-group">
            <label for="phone">Telefoon</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $contactDetail->phone }}">
        </div>
        <div class="form-group">
            <label for="daytime_hours">Openingstijden overdag</label>
            <input type="text" class="form-control" id="daytime_hours" name="daytime_hours" value="{{ $contactDetail->daytime_hours }}">
        </div>
        <div class="form-group">
            <label for="evening_hours">Openingstijden 's avonds</label>
            <input type="text" class="form-control" id="evening_hours" name="evening_hours" value="{{ $contactDetail->evening_hours }}">
        </div>
        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>
</div>
@endsection
