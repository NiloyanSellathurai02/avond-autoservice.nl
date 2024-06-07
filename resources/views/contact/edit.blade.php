<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactgegevens bewerken</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <!-- Terug naar Dashboard Knop -->
    <a href="/dashboard" class="btn btn-secondary mb-3">Terug naar Dashboard</a>

    <h1>Contactgegevens bewerken</h1>
    <form action="{{ route('contact.update') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="address" class="form-label">Adres</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $contactDetail->address }}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telefoon</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $contactDetail->phone }}">
        </div>
        <div class="mb-3">
            <label for="daytime_hours" class="form-label">Openingstijden overdag</label>
            <input type="text" class="form-control" id="daytime_hours" name="daytime_hours" value="{{ $contactDetail->daytime_hours }}">
        </div>
        <div class="mb-3">
            <label for="evening_hours" class="form-label">Openingstijden 's avonds</label>
            <input type="text" class="form-control" id="evening_hours" name="evening_hours" value="{{ $contactDetail->evening_hours }}">
        </div>
        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
