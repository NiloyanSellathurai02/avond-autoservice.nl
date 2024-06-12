<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews Overview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/images/site_logo/logo_blue.svg') }}">
</head>
<body>
<div class="container mt-5">
    <!-- Terug naar Dashboard Knop -->
    <a href="/dashboard" class="btn btn-secondary mb-4">Terug naar Dashboard</a>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Review lijst</h1>
        <a href="{{ route('reviews.create') }}" class="btn btn-success">Maak review aan</a>
    </div>

    @if($reviews->isEmpty())
        <div class="alert alert-info" role="alert">
            There are no reviews available at the moment.
        </div>
    @else
        @foreach ($reviews as $review)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $review->title }}</h5>
                    <p class="card-text">{{ $review->content }}</p>
                    <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-primary">Bewerken</a>
                    <form method="POST" action="{{ route('reviews.destroy', $review->id) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Verwijderen-</button>
                    </form>
                </div>
            </div>
        @endforeach
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

</body>
</html>
