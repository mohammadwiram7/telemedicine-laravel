<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Telemedicine</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Telemedicine</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    {{-- <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a> --}}
                    <a class="nav-item nav-link" href="#">Features</a>
                    <a class="nav-item nav-link" href="#">Pricing</a>
                    <a class="nav-item nav-link" href="{{ route('logout') }}">Logout</a>
                    {{-- <a class="nav-item nav-link disabled" href="#">Disabled</a> --}}
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <!-- Content here -->
        @yield('content')
    </div>
</body>
</html>