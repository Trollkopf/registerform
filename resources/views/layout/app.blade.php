<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" source="{{ asset('build/assets/app-COVpC7fR.css') }}" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
</head>

<body style="background-image: url(https://home.stonecloud.es/assets/images/background-enter.jpg)">
    <header>
        <nav class="navbar justify-content-end navbar-light bg-light">
            <div class="nav navbar-nav">
            <a class="btn btn-outline-primary me-4" href="{{ route('esp') }}">ES</a>
            </div>
            <div class="nav navbar-nav">
            <a class="btn btn-outline-primary me-4" href="{{ route('eng') }}">EN</a>
            </div>
            <div class="nav navbar-nav">
                <a class="btn btn-outline-primary me-4" href="https://home.stonecloud.es">Login</a>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @yield('footer')
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
