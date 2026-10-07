<?php
$base_url = isset($base_url) ? $base_url : '';
$current_page = basename($_SERVER['PHP_SELF']);
?>
    <style>
        .nav-links a.active {
            color: var(--secondary) !important;
        }
        .nav-links a.active::after {
            width: 100% !important;
        }
        /* Update the color for active link even if scrolled (usually it turns to text-main) */
        .navbar.scrolled .nav-links a.active {
            color: var(--secondary) !important;
        }
    </style>
    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <a href="<?php echo $base_url; ?>index.php" class="nav-logo">
            <img src="<?php echo $base_url; ?>assets/icon/android-chrome-512x512.png" alt="Jaya Kitchen Logo"
                style="height: 32px; width: 32px; border-radius: 50%; object-fit: cover;"> Jaya Kitchen
        </a>
        <div class="nav-links" id="navLinks">
            <a href="<?php echo $base_url; ?>index.php" class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a>
            <a href="<?php echo $base_url; ?>index.php#about">Tentang Kami</a>
            <a href="<?php echo $base_url; ?>product.php" class="<?php echo ($current_page == 'product.php' || $current_page == 'product_detail.php') ? 'active' : ''; ?>">Produk & Brand</a>
            <a href="<?php echo $base_url; ?>sosmed.php" class="<?php echo ($current_page == 'sosmed.php') ? 'active' : ''; ?>">Social Media</a>
            <a href="<?php echo $base_url; ?>career.php" class="<?php echo ($current_page == 'career.php') ? 'active' : ''; ?>">Karir</a>
            <a href="https://api.whatsapp.com/send?phone=628113970087" target="_blank" class="btn-contact"><i
                    class="fa-brands fa-whatsapp"></i> Hubungi Kami</a>
        </div>
        <button class="mobile-menu-btn" id="mobileMenuBtn">
            <i class="fa-solid fa-bars"></i>
        </button>
    </nav>