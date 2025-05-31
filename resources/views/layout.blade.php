<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        header {
            background-color: #f44e6b;
            color: white;
            padding: 1rem 0;
        }

        header h1 {
            font-family: 'Playfair Display', serif;
            text-align: center;
            font-size: 2.5rem;
        }

        .navbar {
            background-color: #f44e6b;
            padding: 0.5rem;
        }

        .navbar .navbar-nav .nav-link {
            color: white !important;
        }

        .navbar .navbar-nav .nav-link:hover {
            color: #f8f9fa !important;
            background-color: #e91e63;
        }

        footer {
            background-color: #f8f9fa;
            padding: 1rem;
            text-align: center;
            color: #333;
        }

        .container {
            padding-top: 2rem;
        }

        .btn-custom {
            background-color: #f44e6b;
            color: white;
            padding: 15px 30px;
            border-radius: 10px;
            font-size: 1.2rem;
        }

        .btn-custom:hover {
            background-color: #e91e63;
        }

        /* Responsive Layout */
        @media (max-width: 768px) {
            header h1 {
                font-size: 1.8rem;
            }

            .navbar {
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Dea's Birthday Party</h1>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('buku-tamu.create') }}">Isi Buku Tamu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('buku-tamu.index') }}">Daftar Tamu</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Dea's Birthday Party. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
