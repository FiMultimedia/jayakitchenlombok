<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karir - Jaya Kitchen Lombok</title>
    <link rel="icon" href="assets/icon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/icon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="assets/icon/android-chrome-512x512.png">
    <meta name="description" content="Temukan peluang karir dan lowongan pekerjaan terbaru di Jaya Kitchen Lombok.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #0A3D6B;
            --primary-light: #1A609E;
            --secondary: #F04F23;
            --text-main: #1A1A1A;
            --text-muted: #666666;
            --bg-light: #F8F9FA;
            --bg-white: #FFFFFF;
            --font-heading: 'Outfit', sans-serif;
            --font-body: 'Inter', sans-serif;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-body);
            color: var(--text-main);
            background-color: var(--bg-white);
            line-height: 1.6;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: var(--font-heading);
            font-weight: 700;
            line-height: 1.2;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Navbar */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            transition: var(--transition);
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        .nav-logo {
            font-family: var(--font-heading);
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .nav-links a {
            color: var(--text-main);
            font-weight: 500;
            font-size: 0.95rem;
            transition: var(--transition);
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--secondary);
            bottom: -5px;
            left: 0;
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .btn-contact {
            background: #25d366; /* WhatsApp color override */
            color: white !important;
            padding: 10px 24px;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--transition);
        }
        
        .nav-links a.btn-contact::after {
            display: none;
        }

        .btn-contact:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
            background: #128C7E;
        }

        /* Page Header */
        .page-header {
            margin-top: 80px;
            background: var(--bg-light);
            padding: 60px 5%;
            text-align: center;
            border-bottom: 1px solid #eaeaea;
        }

        .page-header h1 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .page-header p {
            font-size: 1.1rem;
            color: var(--text-muted);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Footer */
        .footer {
            background: #111;
            color: white;
            padding: 80px 5% 40px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr;
            gap: 50px;
            margin-bottom: 60px;
        }

        .footer-about .logo {
            font-family: var(--font-heading);
            font-size: 1.8rem;
            font-weight: 800;
            color: white;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .footer-about p {
            color: #999;
            margin-bottom: 20px;
            max-width: 400px;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: var(--transition);
        }

        .social-links a:hover {
            background: var(--secondary);
            transform: translateY(-3px);
        }

        .footer-title {
            font-size: 1.2rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--secondary);
        }

        .footer-contact ul, .footer-schedule ul {
            list-style: none;
        }

        .footer-contact li {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            color: #999;
        }
        
        .footer-schedule li {
            display: flex;
            justify-content: space-between;
            color: #999;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #666;
            font-size: 0.9rem;
        }

        /* Floating WhatsApp Button */
        .float-wa {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.2);
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: var(--transition);
            text-decoration: none;
        }

        .float-wa:hover {
            background-color: #128C7E;
            color: white;
            transform: scale(1.1);
        }
        
        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: var(--text-main);
            font-size: 1.5rem;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .nav-links {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: white;
                flex-direction: column;
                padding: 30px 5%;
                box-shadow: 0 10px 20px rgba(0,0,0,0.1);
                clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
                transition: all 0.4s ease;
                gap: 20px;
            }
            .nav-links.active {
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            }
            .mobile-menu-btn { display: block; }
            .footer-grid { grid-template-columns: 1fr; }
            .float-wa { width: 50px; height: 50px; bottom: 20px; right: 20px; font-size: 25px; }
        }

        /* Career Section Styles */
        .career-section {
            width: 100%;
            max-width: 900px;
            margin: 50px auto;
            padding: 30px;
            box-sizing: border-box;
            min-height: 40vh;
        }

        .career-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .career-header h2 {
            font-size: 28px;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .career-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .career-item {
            background: #fff;
            border: 1px solid #eaeaea;
            border-radius: 12px;
            padding: 30px;
            text-align: left;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: var(--transition);
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 30px;
            align-items: start;
        }

        .career-thumbnail {
            width: 100%;
            aspect-ratio: 4 / 3;
            border-radius: 12px;
            overflow: hidden;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #eaeaea;
        }

        .career-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .career-content {
            width: 100%;
        }

        @media (max-width: 768px) {
            .career-item {
                grid-template-columns: 1fr;
            }
            .career-thumbnail {
                aspect-ratio: 16 / 9;
            }
        }
        
        .career-item:hover {
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transform: translateY(-2px);
        }

        .career-item h3 {
            color: var(--text-main);
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .career-item p {
            color: var(--text-muted);
            margin-bottom: 20px;
        }

        .career-item a.apply-btn {
            display: inline-block;
            padding: 10px 25px;
            background: var(--primary);
            color: #fff;
            border-radius: 8px;
            font-weight: 500;
            transition: var(--transition);
        }

        .career-item a.apply-btn:hover {
            background: var(--primary-light);
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <?php
$base_url = '';
include 'header.php';
?>

    <!-- Page Header -->
    <header class="page-header">
        <h1>Lowongan Kerja</h1>
        <h2>Bergabunglah dengan Jaya Kitchen Lombok</h2>
        <p>Temukan peluang karir dan berkembang bersama kami di industri peralatan dapur komersial.</p>
    </header>

    <!-- Career Section -->
    <section class="career-section">
        <div class="career-header">
            <h2>Posisi yang Tersedia</h2>
        </div>
        <div class="career-list">
            <!-- Lowongan Kasir -->
            <div class="career-item">
                <div class="career-thumbnail">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Thumbnail Kasir">
                </div>
                <div class="career-content">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 15px;">
                        <div>
                            <h3 style="margin-bottom: 5px;">Kasir (Cashier)</h3>
                            <span style="display: inline-block; background: #eef2f6; color: var(--primary); padding: 5px 12px; border-radius: 20px; font-size: 0.85rem; font-weight: 600;">Full-Time</span>
                            <span style="display: inline-block; background: #fdf0ed; color: var(--secondary); padding: 5px 12px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; margin-left: 10px;">Mataram</span>
                        </div>
                    </div>
                    <p style="margin-bottom: 15px;">Kami mencari Kasir yang teliti, ramah, dan cekatan untuk menangani transaksi harian di Jaya Kitchen Lombok.</p>
                    <h4 style="margin-bottom: 10px; font-size: 1rem;">Kualifikasi:</h4>
                    <ul style="margin-left: 20px; color: var(--text-muted); margin-bottom: 20px; font-size: 0.95rem;">
                        <li>Pria/Wanita, maksimal 28 tahun</li>
                        <li>Minimal lulusan SMA/SMK sederajat</li>
                        <li>Berpengalaman sebagai kasir minimal 1 tahun lebih disukai</li>
                        <li>Jujur, teliti, dan komunikatif</li>
                        <li>Mampu mengoperasikan komputer dan sistem kasir (POS)</li>
                    </ul>
                    <a href="mailto:jayakitchenlombok@gmail.com?subject=Lamaran Pekerjaan: Kasir" class="apply-btn">Kirim Lamaran</a>
                </div>
            </div>
            
            <!-- Lowongan Desain Grafis -->
            <div class="career-item">
                <div class="career-thumbnail">
                    <img src="https://images.unsplash.com/photo-1626785774573-4b799315345d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Thumbnail Desain Grafis">
                </div>
                <div class="career-content">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 15px;">
                        <div>
                            <h3 style="margin-bottom: 5px;">Desain Grafis (Graphic Designer)</h3>
                            <span style="display: inline-block; background: #eef2f6; color: var(--primary); padding: 5px 12px; border-radius: 20px; font-size: 0.85rem; font-weight: 600;">Full-Time</span>
                            <span style="display: inline-block; background: #fdf0ed; color: var(--secondary); padding: 5px 12px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; margin-left: 10px;">Mataram</span>
                        </div>
                    </div>
                    <p style="margin-bottom: 15px;">Kami membutuhkan Desain Grafis kreatif yang mampu membuat materi promosi visual menarik untuk media sosial dan kebutuhan marketing toko.</p>
                    <h4 style="margin-bottom: 10px; font-size: 1rem;">Kualifikasi:</h4>
                    <ul style="margin-left: 20px; color: var(--text-muted); margin-bottom: 20px; font-size: 0.95rem;">
                        <li>Pria/Wanita, maksimal 30 tahun</li>
                        <li>Menguasai software desain (Adobe Illustrator, Photoshop, CorelDraw, dsb.)</li>
                        <li>Memiliki portofolio desain yang menarik dan update dengan tren visual</li>
                        <li>Mampu membuat konten video pendek (Reels/TikTok) menjadi nilai tambah</li>
                        <li>Kreatif, inovatif, dan mampu bekerja dengan target waktu (deadline)</li>
                    </ul>
                    <a href="mailto:jayakitchenlombok@gmail.com?subject=Lamaran Pekerjaan: Desain Grafis" class="apply-btn">Kirim Lamaran</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>
</html>
