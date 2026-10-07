<?php
include 'db.php';

$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
if (empty($slug)) {
    die("Produk tidak ditemukan.");
}

$stmt = $conn->prepare("SELECT * FROM products WHERE slug = ?");
$stmt->bind_param("s", $slug);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Produk tidak ditemukan.");
}

$product = $result->fetch_assoc();
$brand = strtoupper(htmlspecialchars($product['brand']));
$name = htmlspecialchars($product['name']);
$desc = htmlspecialchars($product['description']);
// In DB we stored it like "assets/images/xyz.jpg", so we just prepend our base URL
$image = htmlspecialchars($product['image']);
$wa_text = urlencode("Halo Jaya Kitchen, saya ingin tanya tentang produk " . $brand . " " . $name . ".");

$stmt->close();
$conn->close();

$base_url = ''; // Assuming we are in root directory
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> - Jaya Kitchen Lombok</title>
    <link rel="icon" href="assets/icon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icon/favicon-16x16.png">
    <meta name="description" content="<?php echo $desc; ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
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
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: var(--font-body); color: var(--text-main); background: var(--bg-light); line-height: 1.6; }
        h1, h2, h3 { font-family: var(--font-heading); font-weight: 700; line-height: 1.2; }
        a { text-decoration: none; color: inherit; }
        
        .navbar { position: fixed; top: 0; width: 100%; padding: 15px 5%; display: flex; justify-content: space-between; align-items: center; z-index: 1000; background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); box-shadow: 0 4px 20px rgba(0,0,0,0.05); }
        .nav-logo { font-family: var(--font-heading); font-size: 1.5rem; font-weight: 800; color: var(--primary); display: flex; align-items: center; gap: 10px; }
        .nav-links { display: flex; gap: 30px; align-items: center; }
        .nav-links a { color: var(--text-main); font-weight: 500; font-size: 0.95rem; position: relative; transition: var(--transition); }
        .btn-contact { background: #25d366; color: white !important; padding: 10px 24px; border-radius: 50px; font-weight: 600; }
        .mobile-menu-btn { display: none; background: none; border: none; font-size: 1.5rem; cursor: pointer; }
        
        .product-detail-container { max-width: 1200px; margin: 120px auto 60px; padding: 0 5%; display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: start; }
        .product-image { background: #fff; padding: 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.05); text-align: center; }
        .product-image img { max-width: 100%; max-height: 500px; object-fit: contain; }
        
        .product-info-box { background: #fff; padding: 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.05); }
        .brand-badge { display: inline-block; background: var(--bg-light); color: var(--text-muted); padding: 5px 15px; border-radius: 50px; font-size: 0.9rem; font-weight: 600; margin-bottom: 15px; }
        .product-title { font-size: 2.5rem; color: var(--primary); margin-bottom: 20px; }
        .product-desc { font-size: 1.1rem; color: var(--text-muted); margin-bottom: 30px; }
        .wa-btn-large { display: inline-flex; align-items: center; gap: 10px; background: #25d366; color: #fff; padding: 15px 30px; border-radius: 50px; font-weight: 600; font-size: 1.1rem; transition: var(--transition); }
        .wa-btn-large:hover { background: #128C7E; transform: translateY(-3px); box-shadow: 0 10px 20px rgba(37,211,102,0.3); }
        
        @media (max-width: 768px) {
            .product-detail-container { grid-template-columns: 1fr; }
            .nav-links { display: none; }
            .mobile-menu-btn { display: block; }
        }
        
        .footer { background: #111; color: white; padding: 80px 5% 40px; text-align: center; }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="product-detail-container">
        <div class="product-image">
            <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
        </div>
        <div class="product-info-box">
            <div class="brand-badge"><?php echo $brand; ?></div>
            <h1 class="product-title"><?php echo $name; ?></h1>
            <p class="product-desc"><?php echo $desc; ?></p>
            <a href="https://api.whatsapp.com/send?phone=628113970087&text=<?php echo $wa_text; ?>" class="wa-btn-large" target="_blank">
                <i class="fa-brands fa-whatsapp"></i> Tanya Produk Ini
            </a>
            
            <div style="margin-top: 40px;">
                <h4 style="margin-bottom: 15px; font-size: 1.2rem; color: var(--primary);">Kenapa Beli di Jaya Kitchen?</h4>
                <ul style="list-style: none;">
                    <li style="margin-bottom: 10px;"><i class="fa-solid fa-check" style="color: #25d366; margin-right: 10px;"></i> Garansi Resmi</li>
                    <li style="margin-bottom: 10px;"><i class="fa-solid fa-check" style="color: #25d366; margin-right: 10px;"></i> Teknisi Berpengalaman</li>
                    <li style="margin-bottom: 10px;"><i class="fa-solid fa-check" style="color: #25d366; margin-right: 10px;"></i> Pengiriman Aman ke Seluruh NTB</li>
                </ul>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
