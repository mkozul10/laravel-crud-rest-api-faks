<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Prodavnice')</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f6f8fb;
        }

        .navbar-brand {
            font-weight: 600;
            font-size: 1.3rem;
        }

        .content-wrapper {
            padding-top: 30px;
            padding-bottom: 60px;
        }

        .footer {
            background-color: #212529;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        a.nav-link.active {
            font-weight: bold;
            color: #0d6efd !important;
        }

        .btn-primary, .btn-success, .btn-warning, .btn-danger {
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('prodavnice.index') }}">App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('prodavnice.index') ? 'active' : '' }}" href="{{ route('prodavnice.index') }}">Početna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('prodavnice.create') ? 'active' : '' }}" href="{{ route('prodavnice.create') }}">Dodaj novu</a>
                    </li>
                    <!-- Add more nav items here if needed -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container content-wrapper">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
