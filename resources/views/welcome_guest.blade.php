<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Dea's Birthday Party</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Raleway&display=swap" rel="stylesheet">
    <style>
        body {
            background: url('https://images.unsplash.com/photo-1564866653-b84f8e859d59?fit=crop&w=1600&q=80') no-repeat center center;
            background-size: cover;
            font-family: 'Raleway', sans-serif;
            min-height: 100vh;
            color: #fff;
        }
        .overlay {
            background-color: rgba(255, 255, 255, 0.85);
            padding: 4rem;
            border-radius: 12px;
            text-align: center;
            width: 70%;
            margin: 0 auto;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            color: #e91e63;
            font-weight: bold;
        }
        p {
            font-size: 1.2rem;
        }
        .btn-custom {
            background-color: #e91e63;
            color: #fff;
            padding: 15px 30px;
            font-size: 1.2rem;
            border-radius: 8px;
        }
        .btn-custom:hover {
            background-color: #c2185b;
        }
        .photo-container {
            margin-top: 3rem;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .photo-container img {
            border-radius: 12px;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<div class="overlay">
    <h1>Halo, Selamat Datang di Acara Birthday Party Dea!</h1>
    <p>Terima kasih sudah datang, silakan isi buku tamu dan tinggalkan kesan serta pesan terbaik untuk Dea!</p>
    <a href="{{ route('buku-tamu.create') }}" class="btn btn-custom">Isi Buku Tamu</a>

    <div class="photo-container mt-4">
        <img src="https://via.placeholder.com/150" alt="Foto Dea 1">
        <img src="https://via.placeholder.com/150" alt="Foto Dea 2">
        <img src="https://via.placeholder.com/150" alt="Foto Dea 3">
    </div>
</div>

</body>
</html>
