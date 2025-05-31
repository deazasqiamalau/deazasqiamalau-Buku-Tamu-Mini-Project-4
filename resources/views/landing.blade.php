<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Dea's Birthday Party</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero-section {
            height: 100vh;
            background: linear-gradient(135deg, #ff6b9d 0%, #c44569 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 107, 157, 0.1);
            backdrop-filter: blur(10px);
        }

        .hero-content {
            text-align: center;
            color: white;
            z-index: 2;
            position: relative;
            max-width: 800px;
            padding: 0 20px;
        }

        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #fff, #ffe8f1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: fadeInUp 1s ease-out;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            font-weight: 300;
            opacity: 0.9;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .hero-description {
            font-size: 1.1rem;
            margin-bottom: 3rem;
            opacity: 0.8;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(45deg, #ff6b9d, #f093fb);
            color: white;
            padding: 18px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(255, 107, 157, 0.3);
            animation: fadeInUp 1s ease-out 0.9s both;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(255, 107, 157, 0.4);
            color: white;
        }

        /* Floating Elements */
        .floating-element {
            position: absolute;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(1) {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            top: 60%;
            right: 10%;
            animation-delay: 2s;
        }

        .floating-element:nth-child(3) {
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }

        /* Services Section */
        .services-section {
            padding: 100px 0;
            background: #f8fafc;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            color: #2d3748;
            margin-bottom: 1rem;
        }

        .section-title p {
            font-size: 1.2rem;
            color: #718096;
            max-width: 600px;
            margin: 0 auto;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
        }

        .service-card {
            background: white;
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(45deg, #ff6b9d, #f093fb);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .service-icon {
            font-size: 3rem;
            background: linear-gradient(45deg, #ff6b9d, #f093fb);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1.5rem;
        }

        .service-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            color: #2d3748;
            margin-bottom: 1rem;
        }

        .service-card p {
            color: #718096;
            font-size: 1rem;
            line-height: 1.6;
        }

        /* Guest Book Section */
        .guestbook-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #ff6b9d 0%, #c44569 100%);
            color: white;
            text-align: center;
        }

        .guestbook-content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            margin-bottom: 1.5rem;
        }

        .guestbook-content p {
            font-size: 1.2rem;
            margin-bottom: 3rem;
            opacity: 0.9;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Footer */
        .footer {
            background: #2d3748;
            color: white;
            text-align: center;
            padding: 40px 0;
        }

        .footer p {
            margin-bottom: 1rem;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .social-links a {
            color: white;
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #ff6b9d;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.2rem;
            }

            .hero-description {
                font-size: 1rem;
            }

            .section-title h2 {
                font-size: 2.2rem;
            }

            .services-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .service-card {
                padding: 30px 20px;
            }

            .guestbook-content h2 {
                font-size: 2.2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <!-- Floating Elements -->
        <div class="floating-element">
            <i class="fas fa-birthday-cake" style="font-size: 4rem;"></i>
        </div>
        <div class="floating-element">
            <i class="fas fa-gift" style="font-size: 3rem;"></i>
        </div>
        <div class="floating-element">
            <i class="fas fa-star" style="font-size: 2rem;"></i>
        </div>

        <div class="hero-content">
            <h1 class="hero-title">Dea's 21st Birthday</h1>
            <p class="hero-subtitle">Celebrating Life, Love & Memories</p>
            <p class="hero-description">
                Selamat datang di perayaan ulang tahun yang istimewa! Mari berbagi kebahagiaan, 
                tawa, dan kenangan indah bersama-sama. Terima kasih sudah menjadi bagian dari 
                momen spesial ini.
            </p>
            <a href="{{ route('buku-tamu.create') }}" class="cta-button">
                <i class="fas fa-pen-fancy"></i> Isi Buku Tamu
            </a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-title">
                <h2>Acara & Aktivitas</h2>
                <p>Nikmati berbagai kegiatan menarik yang telah kami siapkan khusus untuk merayakan hari istimewa ini</p>
            </div>

            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-gamepad"></i>
                    </div>
                    <h3>Fun Games</h3>
                    <p>Nikmati berbagai permainan seru dan menarik yang telah disiapkan. Mari bersenang-senang bersama dengan games interaktif!</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3>Photo Booth</h3>
                    <p>Abadikan momen indah dengan photo booth yang telah disiapkan. Ambil foto terbaik dan buat kenangan yang tak terlupakan.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Special Menu</h3>
                    <p>Nikmati hidangan istimewa dan kue ulang tahun yang lezat. Menu khusus telah disiapkan untuk semua tamu undangan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Guest Book Section -->
    <section class="guestbook-section" id="guestbook">
        <div class="container">
            <div class="guestbook-content">
                <h2>Buku Tamu Digital</h2>
                <p>
                    Tinggalkan pesan indah, ucapan selamat, atau kenangan bersama. 
                    Setiap kata dari kalian sangat berarti dan akan selalu diingat.
                </p>
                <a href="#" class="cta-button">
                    <i class="fas fa-heart"></i> Tulis Pesan Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Dea's Birthday Party. Made with <i class="fas fa-heart" style="color: #ff6b9d;"></i></p>
            <div class="social-links">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </footer>

    <script>
        function scrollToGuestbook() {
            document.getElementById('guestbook').scrollIntoView({
                behavior: 'smooth'
            });
        }

        // Add scroll animation
        window.addEventListener('scroll', () => {
            const cards = document.querySelectorAll('.service-card');
            cards.forEach(card => {
                const cardTop = card.getBoundingClientRect().top;
                const cardVisible = 150;
                
                if (cardTop < window.innerHeight - cardVisible) {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }
            });
        });

        // Initialize cards
        document.addEventListener('DOMContentLoaded', () => {
            const cards = document.querySelectorAll('.service-card');
            cards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(50px)';
                card.style.transition = 'all 0.6s ease';
            });
        });
    </script>
</body>
</html>