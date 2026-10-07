$html = Get-Content -Raw "d:\laragon\www\jayakitchenmataram\product.html"
$regex = '(?s)<div class="product-card"[^>]*>.*?<img src="([^"]+)".*?alt="([^"]*)".*?<span class="product-brand">([^<]+)</span>\s*<h3 class="product-title">([^<]+)</h3>\s*<p class="product-desc">([^<]+)</p>\s*<a href="([^"]+)"[^>]*>\s*<i[^>]*></i> Tanya Produk Ini\s*</a>\s*</div>'

$matchesCollection = [regex]::Matches($html, $regex)

if (!(Test-Path "d:\laragon\www\jayakitchenmataram\product")) {
    New-Item -ItemType Directory -Force -Path "d:\laragon\www\jayakitchenmataram\product" | Out-Null
}

$newHtml = $html

foreach ($match in $matchesCollection) {
    $fullMatch = $match.Value
    $imgSrc = $match.Groups[1].Value
    $imgAlt = $match.Groups[2].Value
    $brand = $match.Groups[3].Value
    $title = $match.Groups[4].Value
    $desc = $match.Groups[5].Value
    $waLink = $match.Groups[6].Value

    # Generate slug
    $slug = "$brand-$title"
    $slug = $slug -replace '[^a-zA-Z0-9]+', '-'
    $slug = $slug.Trim('-').ToLower()

    # Generate Product Detail HTML
    $detailHtml = @"
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$title - Jaya Kitchen Lombok</title>
    <link rel="icon" href="../assets/icon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/icon/favicon-16x16.png">
    <meta name="description" content="$desc">
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
    <nav class="navbar">
        <a href="../index.html" class="nav-logo">
            <img src="../assets/icon/android-chrome-512x512.png" alt="Jaya Kitchen Logo" style="height: 32px; width: 32px; border-radius: 50%; object-fit: cover;"> Jaya Kitchen
        </a>
        <div class="nav-links">
            <a href="../index.html#home">Home</a>
            <a href="../product.html">Produk & Brand</a>
            <a href="../career.html">Karir</a>
            <a href="https://api.whatsapp.com/send?phone=628113970087" target="_blank" class="btn-contact"><i class="fa-brands fa-whatsapp"></i> Hubungi Kami</a>
        </div>
        <button class="mobile-menu-btn"><i class="fa-solid fa-bars"></i></button>
    </nav>

    <div class="product-detail-container">
        <div class="product-image">
            <img src="../$imgSrc" alt="$imgAlt">
        </div>
        <div class="product-info-box">
            <div class="brand-badge">$brand</div>
            <h1 class="product-title">$title</h1>
            <p class="product-desc">$desc</p>
            <a href="$waLink" class="wa-btn-large" target="_blank">
                <i class="fa-brands fa-whatsapp"></i> Pesan / Tanya Produk Ini
            </a>
            <div style="margin-top: 30px;">
                <a href="../product.html" style="color: var(--primary); font-weight: 600;"><i class="fa-solid fa-arrow-left"></i> Kembali ke Katalog Produk</a>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2026 Jaya Kitchen Lombok. All rights reserved.</p>
    </footer>
</body>
</html>
"@

    # Save product HTML
    $detailHtml | Out-File "d:\laragon\www\jayakitchenmataram\product\$slug.html" -Encoding utf8

    # Replace button in product.html
    $newButton = "<a href=`"product/$slug.html`" class=`"btn-ask`">`n                    <i class=`"fa-solid fa-eye`"></i> Lihat Detail Produk`n                </a>"
    $oldButtonRegex = '(?s)<a href="[^"]+"[^>]*class="btn-ask"[^>]*>\s*<i[^>]*></i> Tanya Produk Ini\s*</a>'
    
    $newProductCard = $fullMatch -replace $oldButtonRegex, $newButton
    $newHtml = $newHtml.Replace($fullMatch, $newProductCard)
}

$newHtml | Out-File "d:\laragon\www\jayakitchenmataram\product.html" -Encoding utf8
Write-Output "Successfully processed $($matchesCollection.Count) products."
