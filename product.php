<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - Jaya Kitchen Lombok</title>
    <link rel="icon" href="assets/icon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/icon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="assets/icon/android-chrome-512x512.png">
    <meta name="description" content="Jaya Kitchen Lombok adalah supplier peralatan dapur komersial dan pendingin komersial terpercaya di Lombok. Kami menyediakan brand unggulan seperti GEA, GETRA, dan RSA.">
    
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
            background: var(--secondary);
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
            box-shadow: 0 4px 15px rgba(240, 79, 35, 0.4);
            background: #e0441c;
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

        /* Filter Controls */
        .filter-controls {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            margin: 40px 0;
            padding: 0 5%;
        }

        .filter-btn {
            background: white;
            border: 1px solid #ddd;
            padding: 8px 20px;
            border-radius: 50px;
            cursor: pointer;
            font-family: var(--font-body);
            font-weight: 600;
            font-size: 0.9rem;
            color: var(--text-muted);
            transition: var(--transition);
        }

        .filter-btn.active, .filter-btn:hover {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        /* Products Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            padding: 0 5% 80px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: var(--transition);
            border: 1px solid #f0f0f0;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .product-img {
            height: 250px;
            width: 100%;
            overflow: hidden;
            position: relative;
            cursor: pointer;
        }
        
        .product-img::after {
            content: '\f00e'; /* fa-magnifying-glass-plus */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(10, 61, 107, 0.6);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
            opacity: 0;
            transition: var(--transition);
        }

        .product-card:hover .product-img::after {
            opacity: 1;
        }

        .product-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .product-card:hover .product-img img {
            transform: scale(1.1);
        }

        .product-info {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-brand {
            font-size: 0.8rem;
            font-weight: 700;
            color: var(--secondary);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }

        .product-title {
            font-size: 1.25rem;
            color: var(--primary);
            margin-bottom: 15px;
        }
        
        .product-desc {
            font-size: 0.9rem;
            color: var(--text-muted);
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .btn-ask {
            display: block;
            text-align: center;
            padding: 10px;
            border-radius: 8px;
            background: #25d366; /* WhatsApp Green */
            color: white;
            font-weight: 600;
            transition: var(--transition);
        }

        .btn-ask:hover {
            background: #128C7E;
            transform: translateY(-2px);
        }

        /* Lightbox (Modal) */
        .lightbox {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.9);
            z-index: 2000;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        .lightbox.active {
            opacity: 1;
            pointer-events: auto;
        }

        .lightbox-content {
            position: relative;
            max-width: 90%;
            max-height: 90%;
        }

        .lightbox-img {
            max-width: 100%;
            max-height: 90vh;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.5);
        }

        .lightbox-close {
            position: absolute;
            top: -40px;
            right: 0;
            color: white;
            font-size: 2rem;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .lightbox-close:hover {
            color: var(--secondary);
            transform: scale(1.1);
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
        <h1>Katalog Produk</h1>
        <p>Temukan berbagai peralatan dapur komersial dan pendingin dengan kualitas terbaik untuk kebutuhan bisnis Anda.</p>
    </header>

    <!-- Filter -->
    <div class="filter-controls" id="filterContainer">
        <button class="filter-btn active" data-filter="all">Semua Produk</button>
        <button class="filter-btn" data-filter="gea">GEA</button>
        <button class="filter-btn" data-filter="getra">GETRA</button>
        <button class="filter-btn" data-filter="rsa">RSA</button>
        <button class="filter-btn" data-filter="crown">CROWN</button>
        <button class="filter-btn" data-filter="mito">MITO</button>
        <button class="filter-btn" data-filter="robotcoupe">ROBOT COUPE</button>
        <button class="filter-btn" data-filter="fomac">FOMAC</button>
        <button class="filter-btn" data-filter="powerpack">POWERPACK</button>
        <button class="filter-btn" data-filter="philips">PHILIPS</button>
        <button class="filter-btn" data-filter="rinnai">RINNAI</button>
        <button class="filter-btn" data-filter="meichu">MEICHU</button>
        <button class="filter-btn" data-filter="starcool">STAR COOL</button>
        <button class="filter-btn" data-filter="wsa">WSA</button>
        <button class="filter-btn" data-filter="wsa">WSA</button>
        <button class="filter-btn" data-filter="zeppelin">ZEPPELIN</button>
        <button class="filter-btn" data-filter="hoshizaki">HOSHIZAKI</button>
        <button class="filter-btn" data-filter="nayati">NAYATI</button>
        <button class="filter-btn" data-filter="sinmag">SINMAG</button>
    </div>

    <!-- Products Grid -->
    <section class="products-grid" id="productsGrid">
        <?php
        include 'db.php';
        
        $sql = "SELECT * FROM products ORDER BY id ASC";
        $result = $conn->query($sql);
        
        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $brand = htmlspecialchars($row['brand']);
                $image = htmlspecialchars($row['image']);
                $name = htmlspecialchars($row['name']);
                $desc = htmlspecialchars($row['description']);
                $slug = htmlspecialchars($row['slug']);
                ?>
                <div class="product-card" data-brand="<?php echo strtolower($brand); ?>">
                    <div class="product-img" onclick="openLightbox('<?php echo $image; ?>')">
                        <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
                    </div>
                    <div class="product-info">
                        <span class="product-brand"><?php echo strtoupper($brand); ?></span>
                        <h3 class="product-title"><?php echo $name; ?></h3>
                        <p class="product-desc"><?php echo $desc; ?></p>
                        <a href="product_detail.php?slug=<?php echo urlencode($slug); ?>" class="btn-ask">
                            <i class="fa-solid fa-eye"></i> Lihat Detail Produk
                        </a>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p style='grid-column: 1/-1; text-align: center;'>Belum ada produk atau koneksi database gagal.</p>";
        }
        $conn->close();
        ?>
    </section>

    <!-- Lightbox Modal -->
    <div class="lightbox" id="lightbox" onclick="closeLightbox()">
        <div class="lightbox-content" onclick="event.stopPropagation()">
            <span class="lightbox-close" onclick="closeLightbox()"><i class="fa-solid fa-xmark"></i></span>
            <img src="" alt="Preview" class="lightbox-img" id="lightboxImg">
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const productCards = document.querySelectorAll('.product-card');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterBtns.forEach(b => b.classList.remove('active'));
                    // Add active class to current button
                    this.classList.add('active');

                    const filterValue = this.getAttribute('data-filter').toLowerCase();

                    productCards.forEach(card => {
                        if (filterValue === 'all') {
                            card.style.display = 'block';
                        } else {
                            if (card.getAttribute('data-brand') === filterValue) {
                                card.style.display = 'block';
                            } else {
                                card.style.display = 'none';
                            }
                        }
                    });
                });
            });

            // Lightbox functionality
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightboxImg');

            window.openLightbox = function(src) {
                if (lightboxImg && lightbox) {
                    lightboxImg.src = src;
                    lightbox.classList.add('active');
                }
            };

            window.closeLightbox = function() {
                if (lightbox) {
                    lightbox.classList.remove('active');
                }
            };
        });
    </script>
</body>
</html>

