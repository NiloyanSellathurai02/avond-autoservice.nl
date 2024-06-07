<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Form</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/site_logo/logo_blue.svg') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Voeg een review toe</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('reviews.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Titel</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Voer een titel in" required>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Review Tekst</label>
                            <textarea class="form-control" id="content" name="content" rows="4" placeholder="Voeg de review toe" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="author_name" class="form-label">Klant Naam</label>
                            <input type="text" class="form-control" id="author_name" name="author_name" placeholder="Voer klant naam in" required>
                        </div>
                        <div class="mb-3">
                            <label for="rating" class="form-label">Sterren</label>
                            <input type="number" class="form-control" id="rating" name="rating" placeholder="Voeg sterren toe (1-5)" required min="1" max="5">
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Toevoegen</button>
                            <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Terug naar overzicht</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>
</html>
