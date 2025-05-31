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

        .container {
            max-width: 800px;
            margin-top: 50px;
        }

        .btn-custom {
            background-color: #f44e6b;
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            font-size: 1rem;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
