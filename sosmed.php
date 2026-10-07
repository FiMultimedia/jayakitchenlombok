<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media - Jaya Kitchen Lombok</title>
    <link rel="icon" href="assets/icon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/icon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="assets/icon/android-chrome-512x512.png">
    <meta name="description" content="Ikuti sosial media Jaya Kitchen Lombok untuk melihat update produk, instalasi, dan promo terbaru seputar peralatan dapur komersial.">
    
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

        /* Social Media Container */
        .sosmed-container {
            padding: 60px 5%;
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
            min-height: 50vh;
        }
        
        .instagram-wrapper {
            background: #fff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            margin-top: 20px;
        }
        
        .instagram-wrapper iframe {
            width: 100%;
            min-height: 600px;
            border: none;
            border-radius: 10px;
            overflow: hidden;
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
		.instagram-section {
    width: 100%;
    max-width: 900px;
    margin: 50px auto;
    padding: 30px;
    box-sizing: border-box;
    text-align: center;
}

.instagram-header {
    text-align: center;
}

.instagram-header h2 {
    margin-bottom: 8px;
    font-size: 28px;
}

.instagram-header p {
    color: #666;
    margin-bottom: 20px;
}

.instagram-button {
    display: inline-block;
    padding: 12px 24px;
    margin-bottom: 30px;
    background: #000;
    color: #fff;
    text-decoration: none;
    border-radius: 25px;
    font-weight: bold;
}

.instagram-media {
    margin-left: auto !important;
    margin-right: auto !important;
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
        <h1>Social Media</h1>
		<h2>Follow Jaya Kitchen Lombok</h2>
        <p>Ikuti aktivitas, update terbaru, dan inspirasi dapur komersial dari Instagram resmi kami.</p>
    </header>

    <!-- Social Media Section -->
	
	<section class="instagram-section">
    <div class="instagram-header">
	<!--
        <h2>Follow Jaya Kitchen Lombok</h2>
        <p>Lihat menu dan informasi terbaru kami di Instagram.</p>
    -->
        <a href="https://www.instagram.com/jayakitchenlombok/"
           target="_blank"
           class="instagram-button">
            📷 @jayakitchenlombok
        </a>
    </div>

    <blockquote class="instagram-media"
        data-instgrm-permalink="https://www.instagram.com/jayakitchenlombok/"
        data-instgrm-version="14">
    </blockquote>
</section>

<script async src="https://www.instagram.com/embed.js"></script>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>
</html>
